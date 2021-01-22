<?php
// This file is dynamically generated from js.l and js.y by metaphp's CFG parser
// Do not waste your time editing it or reading it. Move along. Thank you.

function __lambda_1 (&$type, &$text, $match, &$state, &$context) {
$context++; $state="code";
}
function __lambda_2 (&$type, &$text, $match, &$state, &$context) {
$context--; if ($context <= 0) $state = "rule";
}
function __lambda_3 (&$type, &$text, $match, &$state, &$context) {
$text = substr($text,1);
}
function __lambda_4 (&$type, &$text, $match, &$state, &$context) {
$text = substr($text,1,strlen($text)-2);
}
function __lambda_5 (&$type, &$text, $match, &$state, &$context) {
$state = 'rule';
}
function __lambda_6 (&$type, &$text, $match, &$state, &$context) {
$state = 'regex';
}
function __lambda_7 (&$type, &$text, $match, &$state, &$context) {
if ($text=='ignore') $type='ignore';
}
function __lambda_8 (&$type, &$text, $match, &$state, &$context) {
$context--; if ($context <= 0) $state = "INITIAL";
}
function __lambda_9 ($tokens) {
return new preg_scanner_definition($tokens[0]);
}
function __lambda_10 ($tokens) {
$tokens[0]->add_common_rule($tokens[1]); return $tokens[0];
}
function __lambda_11 ($tokens) {
$tokens[0]->add_rule_list($tokens[1][0], $tokens[1][1]); return $tokens[0];
}
function __lambda_12 ($tokens) {
return $tokens;
}
function __lambda_13 ($tokens) {
return array($tokens[0], array($tokens[1]));
}
function __lambda_14 ($tokens) {
return array($tokens[0], $tokens[2]);
}
function __lambda_15 ($tokens) {
return preg_pattern(metascanner::make_regex($tokens[0], $tokens[1]), $tokens[2], $tokens[3], $tokens[4]);
}
function __lambda_16 ($tokens) {
return implode('', $tokens);
}
function __lambda_17 ($tokens) {
return 0;
}
function __lambda_18 ($tokens) {
return 1;
}
function __lambda_19 ($tokens) {
return '';
}
function __lambda_20 ($tokens) {
return mk_action($tokens[1]);
}
function __lambda_21 (&$type, &$text, $match, &$state, &$context) {
$state='text';
}
function __lambda_22 (&$type, &$text, $match, &$state, &$context) {
 $text = hexdec($text); 
}
function __lambda_23 (&$type, &$text, $match, &$state, &$context) {
 $text = $text-0; 
}
function __lambda_24 (&$type, &$text, $match, &$state, &$context) {
$state='INITIAL';
}
function __lambda_25 ($tokens) {
 return new js_program($tokens[0]); 
}
function __lambda_26 ($tokens) {
 return new js_source(); 
}
function __lambda_27 ($tokens) {
 $tokens[0]->addStatement($tokens[1]); return $tokens[0]; 
}
function __lambda_28 ($tokens) {
 $tokens[0]->addFunction(new js_function_definition($tokens[1])); return $tokens[0]; 
}
function __lambda_29 ($tokens) {
 return array($tokens[1],array(),$tokens[5]); 
}
function __lambda_30 ($tokens) {
 return array($tokens[1],$tokens[3],$tokens[6]); 
}
function __lambda_31 ($tokens) {
 return new js_function_definition(array('',array(),$tokens[4])); 
}
function __lambda_32 ($tokens) {
 return new js_function_definition(array($tokens[1],array(),$tokens[5])); 
}
function __lambda_33 ($tokens) {
 return new js_function_definition(array('',$tokens[2],$tokens[5])); 
}
function __lambda_34 ($tokens) {
 return new js_function_definition(array($tokens[1],$tokens[3],$tokens[6])); 
}
function __lambda_35 ($tokens) {
return array($tokens[0]);
}
function __lambda_36 ($tokens) {
 $tokens[0][]=$tokens[2]; return $tokens[0]; 
}
function __lambda_37 ($tokens) {
return $tokens[0];
}
function __lambda_38 ($tokens) {
 return new js_nop(); 
}
function __lambda_39 ($tokens) {
 return new js_print($tokens[2]); 
}
function __lambda_40 ($tokens) {
 return new js_print(new js_literal_string($tokens[1],0)); 
}
function __lambda_41 ($tokens) {

    return new js_print(js_plus(new js_literal_string($tokens[1],0), $tokens[3]));

}
function __lambda_42 ($tokens) {
return new js_nop();
}
function __lambda_43 ($tokens) {
return new js_block($tokens[1]);
}
function __lambda_44 ($tokens) {
 return array($tokens[0]);
}
function __lambda_45 ($tokens) {
 $tokens[0][]=$tokens[1]; return $tokens[0];
}
function __lambda_46 ($tokens) {
 
  return new js_var($tokens[1]);

}
function __lambda_47 ($tokens) {
 return array($tokens[0]); 
}
function __lambda_48 ($tokens) {
 return @array($tokens[0],$tokens[1]);
}
function __lambda_49 ($tokens) {
 return $tokens[1]; 
}
function __lambda_50 ($tokens) {
 return new js_nop();
}
function __lambda_51 ($tokens) {
return new js_statement($tokens[0]);
}
function __lambda_52 ($tokens) {

  return new js_if($tokens[2], $tokens[4], $tokens[6]);

}
function __lambda_53 ($tokens) {

  return new js_if($tokens[2], $tokens[4]);

}
function __lambda_54 ($tokens) {
 return new js_do($tokens[4],$tokens[1]); 
}
function __lambda_55 ($tokens) {
 return new js_while($tokens[2], $tokens[4]); 
}
function __lambda_56 ($tokens) {
return new js_for_in($tokens[2], $tokens[4], $tokens[6]);
}
function __lambda_57 ($tokens) {

    $k=2;
    if ($tokens[$k]==';') { $a1=new js_nop(); $k++; } 
    else { $a1=$tokens[$k]; $k+=2; }
    if ($tokens[$k]==';') { $a2=new js_nop(); $k++; } 
    else { $a2=$tokens[$k]; $k+=2; }
    if ($tokens[$k]==')') { $a3=new js_nop(); $k++; } 
    else { $a3=$tokens[$k]; $k+=2; }
    $a4=$tokens[$k];
    return new js_for($a1,$a2,$a3,$a4);

}
function __lambda_58 ($tokens) {

    $k=5;
    if ($tokens[$k]==';') { $a2=new js_nop(); $k++; }
    else { $a2=$tokens[$k]; $k+=2; }
    if ($tokens[$k]==')') { $a3=new js_nop(); $k++; }
    else { $a3=$tokens[$k]; $k+=2; }
    $a4=$tokens[$k];
    return new js_for( new js_var($tokens[3]), $a2, $a3, $a4);

}
function __lambda_59 ($tokens) {
return new js_for_in( new js_var($tokens[3]), $tokens[5], $tokens[7]);
}
function __lambda_60 ($tokens) {
return @new js_continue($tokens[1]);
}
function __lambda_61 ($tokens) {
return @new js_break($tokens[1]);
}
function __lambda_62 ($tokens) {
return @new js_return($tokens[1]);
}
function __lambda_63 ($tokens) {
return new js_with($tokens[2],$tokens[4]);
}
function __lambda_64 ($tokens) {

  return new js_switch($tokens[2], $tokens[4]);

}
function __lambda_65 ($tokens) {
if ($tokens[1]=='}') return array(); else return $tokens[1];
}
function __lambda_66 ($tokens) {

  return $tokens[1];

}
function __lambda_67 ($tokens) {

  return array_merge($tokens[1],$tokens[2]);

}
function __lambda_68 ($tokens) {

  return array_merge($tokens[1],$tokens[2],$tokens[3]);

}
function __lambda_69 ($tokens) {
$tokens[0][] = $tokens[1]; return $tokens[0];
}
function __lambda_70 ($tokens) {
return new js_case($tokens[1],$tokens[3]);
}
function __lambda_71 ($tokens) {
return array(new js_case(0, $tokens[2]));
}
function __lambda_72 ($tokens) {
return new js_label($tokens[0], $tokens[1]);
}
function __lambda_73 ($tokens) {
return new js_throw($tokens[1]);
}
function __lambda_74 ($tokens) {
return new js_try($tokens[1],$tokens[2], NULL);
}
function __lambda_75 ($tokens) {
return new js_try($tokens[1], NULL, $tokens[2]);
}
function __lambda_76 ($tokens) {
return new js_try($tokens[1], $tokens[2], $tokens[3]);
}
function __lambda_77 ($tokens) {
return new js_catch($tokens[2], $tokens[4]);
}
function __lambda_78 ($tokens) {
 return $tokens[1];
}
function __lambda_79 ($tokens) {
 return new js_this();
}
function __lambda_80 ($tokens) {
 return new js_identifier($tokens[0]);
}
function __lambda_81 ($tokens) {
 return $tokens[0]; 
}
function __lambda_82 ($tokens) {
 return new js_literal_null(); 
}
function __lambda_83 ($tokens) {
 return new js_literal_boolean($tokens[0]); 
}
function __lambda_84 ($tokens) {
 return new js_literal_number($tokens[0]); 
}
function __lambda_85 ($tokens) {
return TRUE;
}
function __lambda_86 ($tokens) {
return FALSE;
}
function __lambda_87 ($tokens) {
return new js_literal_string($tokens[0]);
}
function __lambda_88 ($tokens) {
return new js_literal_array($tokens[1]);
}
function __lambda_89 ($tokens) {
$tokens[0][] = $tokens[2]; return $tokens[0];
}
function __lambda_90 ($tokens) {
return new js_literal_null();
}
function __lambda_91 ($tokens) {
return new js_literal_object();
}
function __lambda_92 ($tokens) {
return new js_literal_object($tokens[1]);
}
function __lambda_93 ($tokens) {
return array($tokens[0],$tokens[2]);
}
function __lambda_94 ($tokens) {
$p=explode(':', $tokens[0]); return array(new js_literal_string($p[0],0),$tokens[1]);
}
function __lambda_95 ($tokens) {
$tokens[0][]=$tokens[2];$tokens[0][]=$tokens[4];return $tokens[0];
}
function __lambda_96 ($tokens) {
$p=explode(':', $tokens[2]); $tokens[0][]=new js_literal_string($p[0],0);$tokens[0][]=$tokens[3]; return $tokens[0];
}
function __lambda_97 ($tokens) {
return new js_literal_string($tokens[0],0);
}
function __lambda_98 ($tokens) {
return new js_literal_number($tokens[0]);
}
function __lambda_99 ($tokens) {
return new js_accessor($tokens[0],$tokens[2],1);
}
function __lambda_100 ($tokens) {
return new js_accessor($tokens[0],new js_identifier($tokens[2]),0);
}
function __lambda_101 ($tokens) {
return new js_new($tokens[1]);
}
function __lambda_102 ($tokens) {
return new js_call($tokens[0],$tokens[1]);
}
function __lambda_103 ($tokens) {
return array(); 
}
function __lambda_104 ($tokens) {
return (array)$tokens[1];
}
function __lambda_105 ($tokens) {
$tokens[0][]=$tokens[2];return $tokens[0];
}
function __lambda_106 ($tokens) {
return new js_post_pp($tokens[0]);
}
function __lambda_107 ($tokens) {
return new js_post_mm($tokens[0]);
}
function __lambda_108 ($tokens) {
return new js_delete($tokens[1]);
}
function __lambda_109 ($tokens) {
return new js_void($tokens[1]);
}
function __lambda_110 ($tokens) {
return new js_typeof($tokens[1]);
}
function __lambda_111 ($tokens) {
return new js_pre_pp($tokens[1]);
}
function __lambda_112 ($tokens) {
return new js_pre_mm($tokens[1]);
}
function __lambda_113 ($tokens) {
return new js_u_plus($tokens[1]);
}
function __lambda_114 ($tokens) {
return new js_u_minus($tokens[1]);
}
function __lambda_115 ($tokens) {
return new js_bit_not($tokens[1]);
}
function __lambda_116 ($tokens) {
return new js_not($tokens[1]);
}
function __lambda_117 ($tokens) {
return new js_multiply($tokens[0],$tokens[2]);
}
function __lambda_118 ($tokens) {
return new js_divide($tokens[0],$tokens[2]);
}
function __lambda_119 ($tokens) {
return new js_modulo($tokens[0],$tokens[2]);
}
function __lambda_120 ($tokens) {
return new js_plus($tokens[0],$tokens[2]);
}
function __lambda_121 ($tokens) {
return new js_minus($tokens[0],$tokens[2]);
}
function __lambda_122 ($tokens) {
return new js_lsh($tokens[0],$tokens[2]);
}
function __lambda_123 ($tokens) {
return new js_rsh($tokens[0],$tokens[2]);
}
function __lambda_124 ($tokens) {
return new js_ursh($tokens[0],$tokens[2]);
}
function __lambda_125 ($tokens) {
return 	$tokens[0];
}
function __lambda_126 ($tokens) {
return new js_lt($tokens[0],$tokens[2]);
}
function __lambda_127 ($tokens) {
return new js_gt($tokens[0],$tokens[2]);
}
function __lambda_128 ($tokens) {
return new js_lte($tokens[0],$tokens[2]);
}
function __lambda_129 ($tokens) {
return new js_gte($tokens[0],$tokens[2]);
}
function __lambda_130 ($tokens) {
return new js_instanceof($tokens[0],$tokens[2]);
}
function __lambda_131 ($tokens) {
return new js_in($tokens[0],$tokens[2]);
}
function __lambda_132 ($tokens) {
return new js_equal($tokens[0],$tokens[2]);
}
function __lambda_133 ($tokens) {
return new js_not_equal($tokens[0],$tokens[2]);
}
function __lambda_134 ($tokens) {
return new js_strict_equal($tokens[0],$tokens[2]);
}
function __lambda_135 ($tokens) {
return new js_strict_not_equal($tokens[0],$tokens[2]);
}
function __lambda_136 ($tokens) {
return new js_bit_and($tokens[0],$tokens[2]);
}
function __lambda_137 ($tokens) {
return new js_bit_xor($tokens[0],$tokens[2]);
}
function __lambda_138 ($tokens) {
return new js_bit_or($tokens[0],$tokens[2]);
}
function __lambda_139 ($tokens) {
return new js_and($tokens[0],$tokens[2]);
}
function __lambda_140 ($tokens) {
return new js_or($tokens[0],$tokens[2]);
}
function __lambda_141 ($tokens) {
return new js_ternary($tokens[0],$tokens[2],$tokens[4]);
}
function __lambda_142 ($tokens) {
return new js_assign($tokens[0],$tokens[2]);
}
function __lambda_143 ($tokens) {
return new js_compound_assign($tokens[0],$tokens[2],$tokens[1]);
}
function __lambda_144 ($tokens) {
return new js_comma($tokens[0],$tokens[2]);
}
$lexp = array (
  'INITIAL' => 
  array (
    0 => 
    array (
      0 => '((?s)/\\*.*?\\*/)',
      1 => 'mlcomment',
      2 => 1,
      3 => '',
    ),
    1 => 
    array (
      0 => '((?)//[^\\x0A\\x0D]*)',
      1 => 'slcomment',
      2 => 1,
      3 => '',
    ),
    2 => 
    array (
      0 => '((?)[\\x0A\\x0D])',
      1 => 'newline',
      2 => 1,
      3 => '',
    ),
    3 => 
    array (
      0 => '((?)\\s+)',
      1 => 'whitespace',
      2 => 1,
      3 => '',
    ),
    4 => 
    array (
      0 => '((?)\\?\\>)',
      1 => 'T_SCRIPT_END',
      2 => 0,
      3 => '__lambda_21',
    ),
    5 => 
    array (
      0 => '((?)\\bfunction\\b)',
      1 => 'T_FUNCTION',
      2 => 0,
      3 => '',
    ),
    6 => 
    array (
      0 => '((?)\\bvar\\b)',
      1 => 'T_VAR',
      2 => 0,
      3 => '',
    ),
    7 => 
    array (
      0 => '((?)\\bdo\\b)',
      1 => 'T_DO',
      2 => 0,
      3 => '',
    ),
    8 => 
    array (
      0 => '((?)\\bwhile\\b)',
      1 => 'T_WHILE',
      2 => 0,
      3 => '',
    ),
    9 => 
    array (
      0 => '((?)\\bfor\\b)',
      1 => 'T_FOR',
      2 => 0,
      3 => '',
    ),
    10 => 
    array (
      0 => '((?)\\bin\\b)',
      1 => 'T_IN',
      2 => 0,
      3 => '',
    ),
    11 => 
    array (
      0 => '((?)\\bwith\\b)',
      1 => 'T_WITH',
      2 => 0,
      3 => '',
    ),
    12 => 
    array (
      0 => '((?)\\bswitch\\b)',
      1 => 'T_SWITCH',
      2 => 0,
      3 => '',
    ),
    13 => 
    array (
      0 => '((?)\\bcase\\b)',
      1 => 'T_CASE',
      2 => 0,
      3 => '',
    ),
    14 => 
    array (
      0 => '((?)\\bdefault\\b)',
      1 => 'T_DEFAULT',
      2 => 0,
      3 => '',
    ),
    15 => 
    array (
      0 => '((?)\\bthrow\\b)',
      1 => 'T_THROW',
      2 => 0,
      3 => '',
    ),
    16 => 
    array (
      0 => '((?)\\btry\\b)',
      1 => 'T_TRY',
      2 => 0,
      3 => '',
    ),
    17 => 
    array (
      0 => '((?)\\bcatch\\b)',
      1 => 'T_CATCH',
      2 => 0,
      3 => '',
    ),
    18 => 
    array (
      0 => '((?)\\bfinally\\b)',
      1 => 'T_FINALLY',
      2 => 0,
      3 => '',
    ),
    19 => 
    array (
      0 => '((?)\\bcontinue\\b)',
      1 => 'T_CONTINUE',
      2 => 0,
      3 => '',
    ),
    20 => 
    array (
      0 => '((?)\\bbreak\\b)',
      1 => 'T_BREAK',
      2 => 0,
      3 => '',
    ),
    21 => 
    array (
      0 => '((?)\\breturn\\b)',
      1 => 'T_RETURN',
      2 => 0,
      3 => '',
    ),
    22 => 
    array (
      0 => '((?)\\bnew\\b)',
      1 => 'T_NEW',
      2 => 0,
      3 => '',
    ),
    23 => 
    array (
      0 => '((?)\\bdelete\\b)',
      1 => 'T_DELETE',
      2 => 0,
      3 => '',
    ),
    24 => 
    array (
      0 => '((?)\\bvoid\\b)',
      1 => 'T_VOID',
      2 => 0,
      3 => '',
    ),
    25 => 
    array (
      0 => '((?)\\btypeof\\b)',
      1 => 'T_TYPEOF',
      2 => 0,
      3 => '',
    ),
    26 => 
    array (
      0 => '((?)\\binstanceof\\b)',
      1 => 'T_INSTANCEOF',
      2 => 0,
      3 => '',
    ),
    27 => 
    array (
      0 => '((?)\\bnull\\b)',
      1 => 'T_NULL',
      2 =