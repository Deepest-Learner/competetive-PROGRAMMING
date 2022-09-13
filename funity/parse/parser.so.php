<?php

/* misc subset */

class Bug extends Exception {}
function bug_unless($assertion, $gripe='Bug found.') { if (!$assertion) throw new Bug($gripe); }
function span($class, $text, $title='') {
	$title = htmlspecialchars($title);
	if ($title) $extra = " title=\"$title\"";
	else $extra = '';
	echo "<span class=\"$class\"{$extra}>".$text."</span>\n";
}


/*
File: set.so.php
License: GPL
Purpose: We should really have a "set" data type. It's too useful.
*/

class set {
	function set($list=array()) { $this->data = array_count_values($list); }
	function has($item) { return isset($this->data[$item]); }
	function add($item) { $this->data[$item] = true; }
	function del($item) { unset($this->data[$item]); }
	function all() { return array_keys($this->data); }
	function one() { return key($this->data); }
	function count() { return count($this->data); }
}


/*
File: automata.so.php
License: GPL
Purpose: Contains various utilities for operating on finite automata.
*/

/*
First, we care about finality-extended e-NFAs. These are the basis for most
of the remainder of the systems.


Let it be noted early that pushdown automata will be constructed in terms
of (determinized) FAs which will interpret automata death as an indication
that the system needs to do something with the PDA stack.

We'll form the left-recursive closure of the available non-terminals following
the dieing state. If the next terminal is found in that set, then we also know
what to push and what state to enter. (Alternatively, we know the first step
in a recursive set of "pushes" which don't accept the terminal until the stack
looks the way it should.) Ambiguity here can be considered a bug in the
grammar specification. It makes the PDA non-deterministic. While it may be
possible to remove this non-determinism in some limited cases, I don't think
it's actually necessary.

We can, by this procedure, form a set of PDA rules for what to do with any
given terminal, assuming that the state transitions in the production DFA
call for a non-terminal. We thus have a special category of rule

There is another possibility: We are in a "final" state and we don't have
and edge or a push that accepts the next token. In this case, we assume that
we have recognized a complete production rule.

We call its associated code block, which is expected to return a syntax tree
node. Then, we pop the stack. The symbol on the stack should tell which
DFA to jump into and what state it will be in after recognizing a member of
the production known to the called DFA.

We can convert this entire idea to the normal definition of a DPDA by:
1. Selecting disjoint state labels for every DFA.
2. Keeping all DFA transitions in the same table.

That done, a stack symbol is merely also a state label.

*/

define("FA_NO_MARK", 99999);	# A sentinel value. Real marks should be less.

function gen_label() {
	# Won't return the same number twice. Note that we use state labels
	# for hash keys all over the place. To prevent PHP from doing the
	# wrong thing when we merge such hashes, we tack a letter on the
	# front of the labels.
	static $count = 0;
	$count ++;
	return 's'.$count;
}

class enfa {
	# Extended epsilon NFA in normal form.
	function enfa() {
		# $this->alphabet = array();	# We don't care
		$this->states = array();	# Contains a list of labels

		# These are hashes with state labels for keys:
		$this->delta = array();	# sub-hash from symbol to label-list
		$this->epsilon = array();	# label-list
		$this->mark = array();		# distinguishing mark

		# Now we can add the initial and final states:
		$this->initial = $this->add_state(gen_label());
		$this->final = $this->add_state(gen_label());
	}

	function eclose($label_list) {
		$states = array_count_values($label_list);
		$queue = array_keys($states);
		while (count($queue) > 0) {
			$s = array_shift($queue);
			foreach($this->epsilon[$s] as $t) if (!isset($states[$t])) {
				$states[$t] = true;
				$queue[] = $t;
			}
		}
		return array_keys($states);
	}

	function any_are_final($label_list) {
		return in_array($this->final, $label_list);
	}

	function best_mark($label_list) {
		$mark = FA_NO_MARK;
		foreach($label_list as $label) {
			$mark = min($mark, $this->mark[$label]);
		}
		return $mark;
	}

	function add_state($label) {
		if (isset($this->delta[$label])) {
			die ("Trying to add existing state to an NFA.");
		}
		$this->states[] = $label;
		$this->delta[$label] = array();
		$this->epsilon[$label] = array();
		$this->mark[$label] = FA_NO_MARK;
		return $label;
	}

	function add_epsilon($src, $dest) {
		$this->epsilon[$src][] = $dest;
	}

	function start_states() {
		return $this->eclose(array($this->initial));
	}

	function add_transition($src, $glyph, $dest) {
		$lst = & $this->delta[$src];
		if (empty($lst[$glyph])) $lst[$glyph] = array($dest);
		else $lst[$glyph][] = $dest;
	}

	function step($label_list, $glyph) {
		$out = array();
		foreach($label_list as $label) {
			if (isset($this->delta[$label][$glyph])) {
				$out = array_merge($out, $this->delta[$label][$glyph]);
			}
		}
		return $this->eclose($out);
	}

	function accepting($label_list) {
		# Return a set of those glyphs which will not kill the NFA.
		# Assume that any necessary epsilon closure is already done.

		# Note that there is a certain amount of unavoidable cleverness
		# in the algorithm. I don't care the values of $out, so it
		# doesn't matter that they happen also to be some arbitrary
		# transition lists.
		$out = array();
		foreach($label_list as $label) $out = array_merge($out, $this->delta[$label]);
		return array_keys($out);
	}

	/*
	Now that we have the basics down, I'd like some functions that
	let me make convenient modifications to an NFA. In particular,
	I would like to:

	1: Recognize a particular sequence of glyphs
	2: Accept the union of the current NFA and some other
	3: Perform the Kleene closure
	4: Similar for the common + and ? operators
	5: Accept the concatenation of this and some other NFA.

	Fortunately, these all boil down to a fairly simple set of steps.

	One slightly complicated part is that I'd also like to be able
	to carry these "distinguishing marks" through the system so that
	they can instruct the final PDA on which production matched.

	The other more complicated part is that these production rules are
	really transducers. Each rule has certain parts which must go into
	a parse tree node. It turns out that this is a relatively hard
	problem in the short run, and not necessary for a solution to the
	ultimate goal of getting PHP programs into a "tree-of-lists" structure.
	*/

	function recognize($glyph) {
		$this->add_transition($this->initial, $glyph, $this->final);
	}

	function plus() {
		# Recognize the current NFA one or more times:
		$this->add_epsilon($this->final, $this->initial);
	}

	function hook() {
		# Recognize the current NFA zero or one times:
		$this->add_epsilon($this->initial, $this->final);
	}

	function kleene() {
		# kleen-star closure over the current NFA:
		$this->hook();
		$this->plus();
	}

	function copy_in($nfa) {
		# Used by the union and concatenation operations.
		# Highly magical. Counts on a few things....
		foreach (array('states', 'delta', 'epsilon', 'mark') as $part) {
			$this->$part = array_merge($this->$part, $nfa->$part);
		}
	}

	function determinize() {
		# Now I can write the code that converts
		# an NFA into an equivalent DFA.

		$map = new state_set_labeler();
		$start = $this->start_states();
		$queue = array($start);

		$dfa = new dfa();
		$i = $map->label($start);
		$dfa->add_state($i);
		$dfa->initial = $i;
		$dfa->mark[$i] = $this->best_mark($start);

		while (count($queue) > 0) {
			$set = array_shift($queue);
			$label = $map->label($set);
			foreach ($this->accepting($set) as $glyph) {
				$dest = $this->step($set, $glyph);
				$dest_label = $map->label($dest);
				if (!$dfa->has_state($dest_label)) {
					$dfa->add_state($dest_label);
					$dfa->mark[$dest_label] = $this->best_mark($dest);
					$queue[] = $dest;
				}
				$dfa->add_transition($label, $glyph, $dest_label);
			}
			if ($this->any_are_final($set)) $dfa->final[$label] = true;
		}

		return $dfa;
	}

}

/*
Note that you should really throw away any NFA once you have
used one of the below functions on it, because the result will contain
indentically named state labels from the originals. We could fix this
apparent problem, but it would mean establishing a state-renaming function
for NFAs. Because I don't care to do this just now, and it's not important
anyway, I'm not doing it.
*/
function nfa_union($nfa_list) {
	$out = new enfa();
	foreach($nfa_list as $nfa) {
		$out->copy_in($nfa);
		$out->add_epsilon($out->initial, $nfa->initial);
		$out->add_epsilon($nfa->final, $out->final);
	}
	return $out;
}

function nfa_concat($nfa_list) {
	$out = new enfa();
	$last_state = $out->initial;
	foreach($nfa_list as $nfa) {
		$out->copy_in($nfa);
		$out->add_epsilon($last_state, $nfa->initial);
		$last_state = $nfa->final;
	}
	$out->add_epsilon($last_state, $out->final);
	return $out;
}



class dfa {
	/*
	A DFA has a simpler representation than that of an NFA.
	It also has a bit of a different interface.
	*/

	function dfa() {
		# $this->alphabet = array();	# We don't care
		$this->states = array();	# Contains a list of labels
		$this->initial = '';		# Set this later.

		# These are hashes with state labels for keys:
		$this->final = array();	# Just a bit for each state
		$this->delta = array();	# sub-hash from symbol to label
		$this->mark = array();		# distinguishing mark
	}

	function add_state($label) {
		if ($this->has_state($label)) {
			die ("Trying to add existing state to an DFA.");
		}
		$this->states[] = $label;
		$this->final[$label] = false;
		$this->delta[$label] = array();
		$this->mark[$label] = FA_NO_MARK;
		return $label;
	}

	function has_state($label) {
		return isset($this->delta[$label]);
	}

	function add_transition($src, $glyph, $dest) {
		$this->delta[$src][$glyph] = $dest;
	}

	function step($label, $glyph) {
		return @$this->delta[$label][$glyph];
	}

	function accepting($label) {
		return array_keys($this->delta[$label]);
	}

	function minimize() {
		/*
		We'll use the table-filling algorithm to find pairs of
		distinguishable states. When that algorithm is done, any states
		not distinguishable are equivalent. We'll return a new DFA.
		*/

		$map = $this->indistinguishable_state_map($this->table_fill());
		$dist = array();
		foreach($map as $p => $q) $dist[$q] = $q;

		$dfa = new dfa();
		foreach($dist as $p) $dfa->add_state($p);
		foreach($dist as $p) {
			foreach ($this->delta[$p] as $glyph => $q) $dfa->add_transition($p, $glyph, $map[$q]);
			$dfa->final[$p] = $this->final[$p];
			$dfa->mark[$p] = $this->mark[$p];
		}
		$dfa->initial = $map[$this->initial];

		return $dfa;
	}
	function indistinguishable_state_map($table) {
		# Assumes that $table is filled according to the table filling
		# algorithm.
		$map = array();
		$set = new set($this->states);
		while ($set->count()) {
			$p = $set->one();
			foreach($set->all() as $q) if (!$table->differ($p, $q)) {
				