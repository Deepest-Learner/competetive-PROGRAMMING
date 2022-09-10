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
	