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
      2 => 0,
      3 => '',
    ),
    28 => 
    array (
      0 => '((?)\\btrue\\b)',
      1 => 'T_TRUE',
      2 => 0,
      3 => '',
    ),
    29 => 
    array (
      0 => '((?)\\bfalse\\b)',
      1 => 'T_FALSE',
      2 => 0,
      3 => '',
    ),
    30 => 
    array (
      0 => '((?)\\bif\\b)',
      1 => 'T_IF',
      2 => 0,
      3 => '',
    ),
    31 => 
    array (
      0 => '((?)\\bthen\\b)',
      1 => 'T_THEN',
      2 => 0,
      3 => '',
    ),
    32 => 
    array (
      0 => '((?)\\belse\\b)',
      1 => 'T_ELSE',
      2 => 0,
      3 => '',
    ),
    33 => 
    array (
      0 => '((?)\\bthis\\b)',
      1 => 'T_THIS',
      2 => 0,
      3 => '',
    ),
    34 => 
    array (
      0 => '((?)\\()',
      1 => 'T_LEFTPARENS',
      2 => 0,
      3 => '',
    ),
    35 => 
    array (
      0 => '((?)\\))',
      1 => 'T_RIGHTPARENS',
      2 => 0,
      3 => '',
    ),
    36 => 
    array (
      0 => '((?)\\{)',
      1 => 'T_LEFTBRACE',
      2 => 0,
      3 => '',
    ),
    37 => 
    array (
      0 => '((?)\\})',
      1 => 'T_RIGHTBRACE',
      2 => 0,
      3 => '',
    ),
    38 => 
    array (
      0 => '((?)\\[)',
      1 => 'T_LEFTBRACKET',
      2 => 0,
      3 => '',
    ),
    39 => 
    array (
      0 => '((?)\\])',
      1 => 'T_RIGHTBRACKET',
      2 => 0,
      3 => '',
    ),
    40 => 
    array (
      0 => '((?)\\.)',
      1 => 'T_DOT',
      2 => 0,
      3 => '',
    ),
    41 => 
    array (
      0 => '((?),)',
      1 => 'T_COMMA',
      2 => 0,
      3 => '',
    ),
    42 => 
    array (
      0 => '((?);)',
      1 => 'T_SEMICOLON',
      2 => 0,
      3 => '',
    ),
    43 => 
    array (
      0 => '((?):)',
      1 => 'T_COLON',
      2 => 0,
      3 => '',
    ),
    44 => 
    array (
      0 => '((?)(?:[*/%+&^|-]|>>>?|<<)=)',
      1 => 'T_ASSIGN',
      2 => 0,
      3 => '',
    ),
    45 => 
    array (
      0 => '((?)===)',
      1 => 'T_EQEQEQ',
      2 => 0,
      3 => '',
    ),
    46 => 
    array (
      0 => '((?)==)',
      1 => 'T_EQEQ',
      2 => 0,
      3 => '',
    ),
    47 => 
    array (
      0 => '((?)=)',
      1 => 'T_EQUAL',
      2 => 0,
      3 => '',
    ),
    48 => 
    array (
      0 => '((?)\\+\\+)',
      1 => 'T_PLUSPLUS',
      2 => 0,
      3 => '',
    ),
    49 => 
    array (
      0 => '((?)\\+)',
      1 => 'T_PLUS',
      2 => 0,
      3 => '',
    ),
    50 => 
    array (
      0 => '((?)--)',
      1 => 'T_MINUSMINUS',
      2 => 0,
      3 => '',
    ),
    51 => 
    array (
      0 => '((?)-)',
      1 => 'T_MINUS',
      2 => 0,
      3 => '',
    ),
    52 => 
    array (
      0 => '((?)[~])',
      1 => 'T_TILDE',
      2 => 0,
      3 => '',
    ),
    53 => 
    array (
      0 => '((?)!==)',
      1 => 'T_BANGEQEQ',
      2 => 0,
      3 => '',
    ),
    54 => 
    array (
      0 => '((?)!=)',
      1 => 'T_BANGEQ',
      2 => 0,
      3 => '',
    ),
    55 => 
    array (
      0 => '((?)[!])',
      1 => 'T_BANG',
      2 => 0,
      3 => '',
    ),
    56 => 
    array (
      0 => '((?)[*])',
      1 => 'T_STAR',
      2 => 0,
      3 => '',
    ),
    57 => 
    array (
      0 => '((?)[/])',
      1 => 'T_SLASH',
      2 => 0,
      3 => '',
    ),
    58 => 
    array (
      0 => '((?)[%])',
      1 => 'T_PERCENT',
      2 => 0,
      3 => '',
    ),
    59 => 
    array (
      0 => '((?)>>>)',
      1 => 'T_GTGTGT',
      2 => 0,
      3 => '',
    ),
    60 => 
    array (
      0 => '((?)<<)',
      1 => 'T_LTLT',
      2 => 0,
      3 => '',
    ),
    61 => 
    array (
      0 => '((?)>>)',
      1 => 'T_GTGT',
      2 => 0,
      3 => '',
    ),
    62 => 
    array (
      0 => '((?)<=)',
      1 => 'T_LTEQ',
      2 => 0,
      3 => '',
    ),
    63 => 
    array (
      0 => '((?)>=)',
      1 => 'T_GTEQ',
      2 => 0,
      3 => '',
    ),
    64 => 
    array (
      0 => '((?)<)',
      1 => 'T_LT',
      2 => 0,
      3 => '',
    ),
    65 => 
    array (
      0 => '((?)>)',
      1 => 'T_GT',
      2 => 0,
      3 => '',
    ),
    66 => 
    array (
      0 => '((?)[\\^])',
      1 => 'T_HAT',
      2 => 0,
      3 => '',
    ),
    67 => 
    array (
      0 => '((?)[&][&])',
      1 => 'T_AMPAMP',
      2 => 0,
      3 => '',
    ),
    68 => 
    array (
      0 => '((?)[&])',
      1 => 'T_AMP',
      2 => 0,
      3 => '',
    ),
    69 => 
    array (
      0 => '((?)[|][|])',
      1 => 'T_PIPEPIPE',
      2 => 0,
      3 => '',
    ),
    70 => 
    array (
      0 => '((?)[|])',
      1 => 'T_PIPE',
      2 => 0,
      3 => '',
    ),
    71 => 
    array (
      0 => '((?)[?])',
      1 => 'T_QUESTMARK',
      2 => 0,
      3 => '',
    ),
    72 => 
    array (
      0 => '((?)[\\$_a-zA-Z](?:\\w|\\$|_)*:)',
      1 => 'T_LABEL',
      2 => 0,
      3 => '',
    ),
    73 => 
    array (
      0 => '((?)[\\$_a-zA-Z](?:\\w|\\$|_)*)',
      1 => 'T_WORD',
      2 => 0,
      3 => '',
    ),
    74 => 
    array (
      0 => '((?)[0][xX][0-9a-zA-Z]+)',
      1 => 'T_HEXA',
      2 => 0,
      3 => '__lambda_22',
    ),
    75 => 
    array (
      0 => '((?)(?:(?:[0]|[1-9]\\d*)\\.\\d*|\\.\\d+|(?:[0]|[1-9]\\d*))(?:[eE][-+]?\\d+)?)',
      1 => 'T_DECIMAL',
      2 => 0,
      3 => '__lambda_23',
    ),
    76 => 
    array (
      0 => '((?)\'(?:[^\'\\\\]|\\\\.)*\'|"(?:[^"\\\\]|\\\\.)*")',
      1 => 'T_STRING',
      2 => 0,
      3 => '',
    ),
  ),
  'text' => 
  array (
    0 => 
    array (
      0 => '((?)\\<\\?(?:js)?)',
      1 => 'T_SCRIPT_BEGIN',
      2 => 0,
      3 => '__lambda_24',
    ),
    1 => 
    array (
      0 => '((?)\\<\\?=)',
      1 => 'T_SCRIPT_BEGIN_ECHO',
      2 => 0,
      3 => '__lambda_24',
    ),
    2 => 
    array (
      0 => '((?s)(?:[^<]|<[^?])*)',
      1 => 'T_TEXT',
      2 => 0,
      3 => '',
    ),
  ),
);
$dpa = array (
  'start' => 
  array (
    'Program' => 's165',
    'Source' => 's183',
    'FunctionDeclaration' => 's223',
    'FunctionExpression' => 's302',
    'FormalParameterList' => 's337',
    'Identifier' => 's346',
    'Statement' => 's380',
    'TextStatement' => 's430',
    'Block' => 's455',
    'StatementList' => 's470',
    'VariableStatement' => 's484',
    'VariableDeclarationList' => 's500',
    'VariableDeclaration' => 's513',
    'Initialiser' => 's524',
    'EmptyStatement' => 's531',
    'ExpressionStatement' => 's541',
    'IfStatement' => 's574',
    'IterationStatement' => 's688',
    'ContinueStatement' => 's736',
    'BreakStatement' => 's750',
    'ReturnStatement' => 's764',
    'WithStatement' => 's782',
    'SwitchStatement' => 's802',
    'CaseBlock' => 's858',
    'CaseClauses' => 's880',
    'CaseClause' => 's896',
    'DefaultClause' => 's911',
    'LabelledStatement' => 's923',
    'ThrowStatement' => 's936',
    'TryStatement' => 's968',
    'Catch' => 's988',
    'Finally' => 's1002',
    'PrimaryExpression' => 's1025',
    'Literal' => 's1044',
    'BooleanLiteral' => 's1055',
    'NumericLiteral' => 's1064',
    'StringLiteral' => 's1071',
    'ArrayLiteral' => 's1083',
    'ArrayElements' => 's1099',
    'ArrayElement' => 's1110',
    'ObjectLiteral' => 's1128',
    'PropertyNameAndValueList' => 's1171',
    'PropertyName' => 's1192',
    'MemberExpression' => 's1232',
    'Arguments' => 's1260',
    'ArgumentList' => 's1277',
    'LeftHandSideExpression' => 's1310',
    'PostfixExpression' => 's1335',
    'UnaryExpression' => 's1397',
    'MultiplicativeExpression' => 's1445',
    'AdditiveExpression' => 's1474',
    'ShiftExpression' => 's1509',
    'RelationalExpression' => 's1570',
    'EqualityExpression' => 's1621',
    'BitwiseANDExpression' => 's1644',
    'BitwiseXORExpression' => 's1661',
    'BitwiseORExpression' => 's1678',
    'LogicalANDExpression' => 's1695',
    'LogicalORExpression' => 's1712',
    'ConditionalExpression' => 's1733',
    'AssignmentExpression' => 's1759',
    'Expression' => 's1777',
    'PrimaryExpression2' => 's1800',
    'MemberExpression2' => 's1842',
    'LeftHandSideExpression2' => 's1881',
    'PostfixExpression2' => 's1906',
    'UnaryExpression2' => 's1968',
    'MultiplicativeExpression2' => 's2016',
    'AdditiveExpression2' => 's2045',
    'ShiftExpression2' => 's2080',
    'RelationalExpression2' => 's2141',
    'EqualityExpression2' => 's2192',
    'BitwiseANDExpression2' => 's2215',
    'BitwiseXORExpression2' => 's2232',
    'BitwiseORExpression2' => 's2249',
    'LogicalANDExpression2' => 's2266',
    'LogicalORExpression2' => 's2283',
    'ConditionalExpression2' => 's2304',
    'AssignmentExpression2' => 's2330',
    'Expression2' => 's2348',
    'RelationalExpressionNoIn' => 's2397',
    'EqualityExpressionNoIn' => 's2446',
    'BitwiseANDExpressionNoIn' => 's2469',
    'BitwiseXORExpressionNoIn' => 's2486',
    'BitwiseORExpressionNoIn' => 's2503',
    'LogicalANDExpressionNoIn' => 's2520',
    'LogicalORExpressionNoIn' => 's2537',
    'ConditionalExpressionNoIn' => 's2558',
    'AssignmentExpressionNoIn' => 's2584',
    'ExpressionNoIn' => 's2602',
    'VariableDeclarationListNoIn' => 's2619',
    'VariableDeclarationNoIn' => 's2632',
    'InitialiserNoIn' => 's2643',
  ),
  'delta' => 
  array (
    's165' => 
    array (
      '[default]' => 
      array (
        0 => 'push',
        1 => 'Source',
        2 => 's166',
      ),
    ),
    's166' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 16,
      ),
    ),
    's183' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 17,
      ),
      'T_FUNCTION' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_VAR' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_IF' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_DO' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_WHILE' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_FOR' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_BREAK' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_RETURN' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_WITH' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_LABEL' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_SWITCH' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_THROW' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_TRY' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_DELETE' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_VOID' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_PLUS' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_MINUS' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_TILDE' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_BANG' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_NEW' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_THIS' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_WORD' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_NULL' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_TRUE' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_FALSE' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_HEXA' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
      'T_STRING' => 
      array (
        0 => 'fold',
        1 => 17,
        2 => 's184',
      ),
    ),
    's184' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_VAR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_IF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_DO' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_WHILE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_FOR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_BREAK' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_RETURN' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_WITH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_LABEL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_SWITCH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_THROW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_TRY' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's185',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'FunctionDeclaration',
        2 => 's186',
      ),
    ),
    's185' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 18,
      ),
      'T_FUNCTION' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_VAR' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_IF' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_DO' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_WHILE' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_FOR' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_BREAK' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_RETURN' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_WITH' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_LABEL' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_SWITCH' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_THROW' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_TRY' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_DELETE' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_VOID' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_PLUS' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_MINUS' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_TILDE' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_BANG' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_NEW' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_THIS' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_WORD' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_NULL' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_TRUE' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_FALSE' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_HEXA' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
      'T_STRING' => 
      array (
        0 => 'fold',
        1 => 18,
        2 => 's184',
      ),
    ),
    's186' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 19,
      ),
      'T_FUNCTION' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_VAR' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_IF' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_DO' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_WHILE' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_FOR' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_BREAK' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_RETURN' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_WITH' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_LABEL' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_SWITCH' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_THROW' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_TRY' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_DELETE' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_VOID' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_PLUS' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_MINUS' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_TILDE' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_BANG' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_NEW' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_THIS' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_WORD' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_NULL' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_TRUE' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_FALSE' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_HEXA' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
      'T_STRING' => 
      array (
        0 => 'fold',
        1 => 19,
        2 => 's184',
      ),
    ),
    's223' => 
    array (
      'T_FUNCTION' => 
      array (
        0 => 'go',
        1 => 's224',
      ),
    ),
    's224' => 
    array (
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Identifier',
        2 => 's225',
      ),
    ),
    's225' => 
    array (
      'T_LEFTPARENS' => 
      array (
        0 => 'go',
        1 => 's226',
      ),
    ),
    's226' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's227',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'FormalParameterList',
        2 => 's228',
      ),
    ),
    's227' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'go',
        1 => 's229',
      ),
    ),
    's228' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's230',
      ),
    ),
    's229' => 
    array (
      '[default]' => 
      array (
        0 => 'push',
        1 => 'Source',
        2 => 's231',
      ),
    ),
    's230' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'go',
        1 => 's232',
      ),
    ),
    's231' => 
    array (
      'T_RIGHTBRACE' => 
      array (
        0 => 'go',
        1 => 's233',
      ),
    ),
    's232' => 
    array (
      '[default]' => 
      array (
        0 => 'push',
        1 => 'Source',
        2 => 's234',
      ),
    ),
    's233' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 20,
      ),
    ),
    's234' => 
    array (
      'T_RIGHTBRACE' => 
      array (
        0 => 'go',
        1 => 's235',
      ),
    ),
    's235' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 21,
      ),
    ),
    's302' => 
    array (
      'T_FUNCTION' => 
      array (
        0 => 'go',
        1 => 's303',
      ),
    ),
    's303' => 
    array (
      'T_LEFTPARENS' => 
      array (
        0 => 'go',
        1 => 's304',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Identifier',
        2 => 's305',
      ),
    ),
    's304' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's306',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'FormalParameterList',
        2 => 's307',
      ),
    ),
    's305' => 
    array (
      'T_LEFTPARENS' => 
      array (
        0 => 'go',
        1 => 's308',
      ),
    ),
    's306' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'go',
        1 => 's309',
      ),
    ),
    's307' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's310',
      ),
    ),
    's308' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's311',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'FormalParameterList',
        2 => 's312',
      ),
    ),
    's309' => 
    array (
      '[default]' => 
      array (
        0 => 'push',
        1 => 'Source',
        2 => 's313',
      ),
    ),
    's310' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'go',
        1 => 's314',
      ),
    ),
    's311' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'go',
        1 => 's315',
      ),
    ),
    's312' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's316',
      ),
    ),
    's313' => 
    array (
      'T_RIGHTBRACE' => 
      array (
        0 => 'go',
        1 => 's317',
      ),
    ),
    's314' => 
    array (
      '[default]' => 
      array (
        0 => 'push',
        1 => 'Source',
        2 => 's318',
      ),
    ),
    's315' => 
    array (
      '[default]' => 
      array (
        0 => 'push',
        1 => 'Source',
        2 => 's319',
      ),
    ),
    's316' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'go',
        1 => 's320',
      ),
    ),
    's317' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 22,
      ),
    ),
    's318' => 
    array (
      'T_RIGHTBRACE' => 
      array (
        0 => 'go',
        1 => 's321',
      ),
    ),
    's319' => 
    array (
      'T_RIGHTBRACE' => 
      array (
        0 => 'go',
        1 => 's322',
      ),
    ),
    's320' => 
    array (
      '[default]' => 
      array (
        0 => 'push',
        1 => 'Source',
        2 => 's323',
      ),
    ),
    's321' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 24,
      ),
    ),
    's322' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 23,
      ),
    ),
    's323' => 
    array (
      'T_RIGHTBRACE' => 
      array (
        0 => 'go',
        1 => 's324',
      ),
    ),
    's324' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 25,
      ),
    ),
    's337' => 
    array (
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Identifier',
        2 => 's338',
      ),
    ),
    's338' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 26,
      ),
      'T_COMMA' => 
      array (
        0 => 'fold',
        1 => 26,
        2 => 's339',
      ),
    ),
    's339' => 
    array (
      'T_COMMA' => 
      array (
        0 => 'go',
        1 => 's340',
      ),
    ),
    's340' => 
    array (
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Identifier',
        2 => 's341',
      ),
    ),
    's341' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 27,
      ),
      'T_COMMA' => 
      array (
        0 => 'fold',
        1 => 27,
        2 => 's339',
      ),
    ),
    's346' => 
    array (
      'T_WORD' => 
      array (
        0 => 'go',
        1 => 's347',
      ),
    ),
    's347' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 28,
      ),
    ),
    's380' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Block',
        2 => 's381',
      ),
      'T_VAR' => 
      array (
        0 => 'push',
        1 => 'VariableStatement',
        2 => 's382',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'push',
        1 => 'EmptyStatement',
        2 => 's383',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's384',
      ),
      'T_IF' => 
      array (
        0 => 'push',
        1 => 'IfStatement',
        2 => 's385',
      ),
      'T_DO' => 
      array (
        0 => 'push',
        1 => 'IterationStatement',
        2 => 's386',
      ),
      'T_WHILE' => 
      array (
        0 => 'push',
        1 => 'IterationStatement',
        2 => 's386',
      ),
      'T_FOR' => 
      array (
        0 => 'push',
        1 => 'IterationStatement',
        2 => 's386',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'push',
        1 => 'ContinueStatement',
        2 => 's387',
      ),
      'T_BREAK' => 
      array (
        0 => 'push',
        1 => 'BreakStatement',
        2 => 's388',
      ),
      'T_RETURN' => 
      array (
        0 => 'push',
        1 => 'ReturnStatement',
        2 => 's389',
      ),
      'T_WITH' => 
      array (
        0 => 'push',
        1 => 'WithStatement',
        2 => 's390',
      ),
      'T_LABEL' => 
      array (
        0 => 'push',
        1 => 'LabelledStatement',
        2 => 's391',
      ),
      'T_SWITCH' => 
      array (
        0 => 'push',
        1 => 'SwitchStatement',
        2 => 's392',
      ),
      'T_THROW' => 
      array (
        0 => 'push',
        1 => 'ThrowStatement',
        2 => 's393',
      ),
      'T_TRY' => 
      array (
        0 => 'push',
        1 => 'TryStatement',
        2 => 's394',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'push',
        1 => 'TextStatement',
        2 => 's395',
      ),
    ),
    's381' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 29,
      ),
    ),
    's382' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 30,
      ),
    ),
    's383' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 31,
      ),
    ),
    's384' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 32,
      ),
    ),
    's385' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 33,
      ),
    ),
    's386' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 34,
      ),
    ),
    's387' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 35,
      ),
    ),
    's388' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 36,
      ),
    ),
    's389' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 37,
      ),
    ),
    's390' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 38,
      ),
    ),
    's391' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 39,
      ),
    ),
    's392' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 40,
      ),
    ),
    's393' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 41,
      ),
    ),
    's394' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 42,
      ),
    ),
    's395' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 43,
      ),
    ),
    's430' => 
    array (
      'T_SCRIPT_END' => 
      array (
        0 => 'go',
        1 => 's431',
      ),
    ),
    's431' => 
    array (
      'T_SCRIPT_BEGIN' => 
      array (
        0 => 'go',
        1 => 's432',
      ),
      'T_SCRIPT_BEGIN_ECHO' => 
      array (
        0 => 'go',
        1 => 's433',
      ),
      'T_TEXT' => 
      array (
        0 => 'go',
        1 => 's434',
      ),
    ),
    's432' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 44,
      ),
    ),
    's433' => 
    array (
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's435',
      ),
    ),
    's434' => 
    array (
      'T_SCRIPT_BEGIN' => 
      array (
        0 => 'go',
        1 => 's436',
      ),
      'T_SCRIPT_BEGIN_ECHO' => 
      array (
        0 => 'go',
        1 => 's437',
      ),
    ),
    's435' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 45,
      ),
    ),
    's436' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 46,
      ),
    ),
    's437' => 
    array (
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'ExpressionStatement',
        2 => 's438',
      ),
    ),
    's438' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 47,
      ),
    ),
    's455' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'go',
        1 => 's456',
      ),
    ),
    's456' => 
    array (
      'T_RIGHTBRACE' => 
      array (
        0 => 'go',
        1 => 's457',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_VAR' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_IF' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_DO' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_WHILE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_FOR' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_BREAK' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_RETURN' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_WITH' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_LABEL' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_SWITCH' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_THROW' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_TRY' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's458',
      ),
    ),
    's457' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 48,
      ),
    ),
    's458' => 
    array (
      'T_RIGHTBRACE' => 
      array (
        0 => 'go',
        1 => 's459',
      ),
    ),
    's459' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 49,
      ),
    ),
    's470' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_VAR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_IF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_DO' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_WHILE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_FOR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_BREAK' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_RETURN' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_WITH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_LABEL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_SWITCH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_THROW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_TRY' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's471',
      ),
    ),
    's471' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 50,
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_VAR' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_IF' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_DO' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_WHILE' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_FOR' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_BREAK' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_RETURN' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_WITH' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_LABEL' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_SWITCH' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_THROW' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_TRY' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_DELETE' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_VOID' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_PLUS' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_MINUS' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_TILDE' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_BANG' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_NEW' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_THIS' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_WORD' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_NULL' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_TRUE' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_FALSE' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_HEXA' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
      'T_STRING' => 
      array (
        0 => 'fold',
        1 => 50,
        2 => 's472',
      ),
    ),
    's472' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_VAR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_IF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_DO' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_WHILE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_FOR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_BREAK' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_RETURN' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_WITH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_LABEL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_SWITCH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_THROW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_TRY' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's473',
      ),
    ),
    's473' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 51,
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_VAR' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_IF' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_DO' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_WHILE' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_FOR' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_BREAK' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_RETURN' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_WITH' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_LABEL' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_SWITCH' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_THROW' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_TRY' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_DELETE' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_VOID' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_PLUS' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_MINUS' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_TILDE' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_BANG' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_NEW' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_THIS' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_WORD' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_NULL' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_TRUE' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_FALSE' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_HEXA' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
      'T_STRING' => 
      array (
        0 => 'fold',
        1 => 51,
        2 => 's472',
      ),
    ),
    's484' => 
    array (
      'T_VAR' => 
      array (
        0 => 'go',
        1 => 's485',
      ),
    ),
    's485' => 
    array (
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'VariableDeclarationList',
        2 => 's486',
      ),
    ),
    's486' => 
    array (
      'T_SEMICOLON' => 
      array (
        0 => 'go',
        1 => 's487',
      ),
    ),
    's487' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 52,
      ),
    ),
    's500' => 
    array (
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'VariableDeclaration',
        2 => 's501',
      ),
    ),
    's501' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 53,
      ),
      'T_COMMA' => 
      array (
        0 => 'fold',
        1 => 53,
        2 => 's502',
      ),
    ),
    's502' => 
    array (
      'T_COMMA' => 
      array (
        0 => 'go',
        1 => 's503',
      ),
    ),
    's503' => 
    array (
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'VariableDeclaration',
        2 => 's504',
      ),
    ),
    's504' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 54,
      ),
      'T_COMMA' => 
      array (
        0 => 'fold',
        1 => 54,
        2 => 's502',
      ),
    ),
    's513' => 
    array (
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Identifier',
        2 => 's514',
      ),
    ),
    's514' => 
    array (
      'T_EQUAL' => 
      array (
        0 => 'push',
        1 => 'Initialiser',
        2 => 's515',
      ),
      '[default]' => 
      array (
        0 => 'do',
        1 => 55,
      ),
    ),
    's515' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 55,
      ),
    ),
    's524' => 
    array (
      'T_EQUAL' => 
      array (
        0 => 'go',
        1 => 's525',
      ),
    ),
    's525' => 
    array (
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's526',
      ),
    ),
    's526' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 56,
      ),
    ),
    's531' => 
    array (
      'T_SEMICOLON' => 
      array (
        0 => 'go',
        1 => 's532',
      ),
    ),
    's532' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 57,
      ),
    ),
    's541' => 
    array (
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Expression2',
        2 => 's542',
      ),
    ),
    's542' => 
    array (
      'T_SEMICOLON' => 
      array (
        0 => 'go',
        1 => 's543',
      ),
    ),
    's543' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 58,
      ),
    ),
    's574' => 
    array (
      'T_IF' => 
      array (
        0 => 'go',
        1 => 's575',
      ),
    ),
    's575' => 
    array (
      'T_LEFTPARENS' => 
      array (
        0 => 'go',
        1 => 's576',
      ),
    ),
    's576' => 
    array (
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's577',
      ),
    ),
    's577' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's578',
      ),
    ),
    's578' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_VAR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_IF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_DO' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_WHILE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_FOR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_BREAK' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_RETURN' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_WITH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_LABEL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_SWITCH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_THROW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_TRY' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's579',
      ),
    ),
    's579' => 
    array (
      'T_ELSE' => 
      array (
        0 => 'go',
        1 => 's580',
      ),
      '[default]' => 
      array (
        0 => 'do',
        1 => 60,
      ),
    ),
    's580' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_VAR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_IF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_DO' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_WHILE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_FOR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_BREAK' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_RETURN' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_WITH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_LABEL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_SWITCH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_THROW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_TRY' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's581',
      ),
    ),
    's581' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 59,
      ),
    ),
    's688' => 
    array (
      'T_DO' => 
      array (
        0 => 'go',
        1 => 's689',
      ),
      'T_WHILE' => 
      array (
        0 => 'go',
        1 => 's690',
      ),
      'T_FOR' => 
      array (
        0 => 'go',
        1 => 's691',
      ),
    ),
    's689' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_VAR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_IF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_DO' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_WHILE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_FOR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_BREAK' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_RETURN' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_WITH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_LABEL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_SWITCH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_THROW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_TRY' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's692',
      ),
    ),
    's690' => 
    array (
      'T_LEFTPARENS' => 
      array (
        0 => 'go',
        1 => 's693',
      ),
    ),
    's691' => 
    array (
      'T_LEFTPARENS' => 
      array (
        0 => 'go',
        1 => 's694',
      ),
    ),
    's692' => 
    array (
      'T_WHILE' => 
      array (
        0 => 'go',
        1 => 's695',
      ),
    ),
    's693' => 
    array (
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's696',
      ),
    ),
    's694' => 
    array (
      'T_VAR' => 
      array (
        0 => 'go',
        1 => 's698',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'go',
        1 => 's699',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'ExpressionNoIn',
        2 => 's697',
      ),
    ),
    's695' => 
    array (
      'T_LEFTPARENS' => 
      array (
        0 => 'go',
        1 => 's700',
      ),
    ),
    's696' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's701',
      ),
    ),
    's697' => 
    array (
      'T_IN' => 
      array (
        0 => 'go',
        1 => 's702',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'go',
        1 => 's699',
      ),
    ),
    's698' => 
    array (
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'VariableDeclarationListNoIn',
        2 => 's703',
      ),
    ),
    's699' => 
    array (
      'T_SEMICOLON' => 
      array (
        0 => 'go',
        1 => 's705',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's704',
      ),
    ),
    's700' => 
    array (
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's706',
      ),
    ),
    's701' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_VAR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_IF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_DO' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_WHILE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_FOR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_BREAK' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_RETURN' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_WITH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_LABEL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_SWITCH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_THROW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_TRY' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's707',
      ),
    ),
    's702' => 
    array (
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's708',
      ),
    ),
    's703' => 
    array (
      'T_SEMICOLON' => 
      array (
        0 => 'go',
        1 => 's709',
      ),
      'T_IN' => 
      array (
        0 => 'go',
        1 => 's710',
      ),
    ),
    's704' => 
    array (
      'T_SEMICOLON' => 
      array (
        0 => 'go',
        1 => 's705',
      ),
    ),
    's705' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's712',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's711',
      ),
    ),
    's706' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's713',
      ),
    ),
    's707' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 62,
      ),
    ),
    's708' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's714',
      ),
    ),
    's709' => 
    array (
      'T_SEMICOLON' => 
      array (
        0 => 'go',
        1 => 's716',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's715',
      ),
    ),
    's710' => 
    array (
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's717',
      ),
    ),
    's711' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's712',
      ),
    ),
    's712' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_VAR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_IF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_DO' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_WHILE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_FOR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_BREAK' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_RETURN' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_WITH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_LABEL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_SWITCH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_THROW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_TRY' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's718',
      ),
    ),
    's713' => 
    array (
      'T_SEMICOLON' => 
      array (
        0 => 'go',
        1 => 's719',
      ),
    ),
    's714' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_VAR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_IF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_DO' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_WHILE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_FOR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_BREAK' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_RETURN' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_WITH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_LABEL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_SWITCH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_THROW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_TRY' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's720',
      ),
    ),
    's715' => 
    array (
      'T_SEMICOLON' => 
      array (
        0 => 'go',
        1 => 's716',
      ),
    ),
    's716' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's722',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's721',
      ),
    ),
    's717' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's723',
      ),
    ),
    's718' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 64,
      ),
    ),
    's719' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 61,
      ),
    ),
    's720' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 63,
      ),
    ),
    's721' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's722',
      ),
    ),
    's722' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_VAR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_IF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_DO' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_WHILE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_FOR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_BREAK' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_RETURN' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_WITH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_LABEL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_SWITCH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_THROW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_TRY' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's724',
      ),
    ),
    's723' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_VAR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_IF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_DO' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_WHILE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_FOR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_BREAK' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_RETURN' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_WITH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_LABEL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_SWITCH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_THROW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_TRY' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's725',
      ),
    ),
    's724' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 65,
      ),
    ),
    's725' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 66,
      ),
    ),
    's736' => 
    array (
      'T_CONTINUE' => 
      array (
        0 => 'go',
        1 => 's737',
      ),
    ),
    's737' => 
    array (
      'T_SEMICOLON' => 
      array (
        0 => 'go',
        1 => 's739',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Identifier',
        2 => 's738',
      ),
    ),
    's738' => 
    array (
      'T_SEMICOLON' => 
      array (
        0 => 'go',
        1 => 's739',
      ),
    ),
    's739' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 67,
      ),
    ),
    's750' => 
    array (
      'T_BREAK' => 
      array (
        0 => 'go',
        1 => 's751',
      ),
    ),
    's751' => 
    array (
      'T_SEMICOLON' => 
      array (
        0 => 'go',
        1 => 's753',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Identifier',
        2 => 's752',
      ),
    ),
    's752' => 
    array (
      'T_SEMICOLON' => 
      array (
        0 => 'go',
        1 => 's753',
      ),
    ),
    's753' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 68,
      ),
    ),
    's764' => 
    array (
      'T_RETURN' => 
      array (
        0 => 'go',
        1 => 's765',
      ),
    ),
    's765' => 
    array (
      'T_SEMICOLON' => 
      array (
        0 => 'go',
        1 => 's767',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's766',
      ),
    ),
    's766' => 
    array (
      'T_SEMICOLON' => 
      array (
        0 => 'go',
        1 => 's767',
      ),
    ),
    's767' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 69,
      ),
    ),
    's782' => 
    array (
      'T_WITH' => 
      array (
        0 => 'go',
        1 => 's783',
      ),
    ),
    's783' => 
    array (
      'T_LEFTPARENS' => 
      array (
        0 => 'go',
        1 => 's784',
      ),
    ),
    's784' => 
    array (
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's785',
      ),
    ),
    's785' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's786',
      ),
    ),
    's786' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_VAR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_IF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_DO' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_WHILE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_FOR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_BREAK' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_RETURN' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_WITH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_LABEL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_SWITCH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_THROW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_TRY' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's787',
      ),
    ),
    's787' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 70,
      ),
    ),
    's802' => 
    array (
      'T_SWITCH' => 
      array (
        0 => 'go',
        1 => 's803',
      ),
    ),
    's803' => 
    array (
      'T_LEFTPARENS' => 
      array (
        0 => 'go',
        1 => 's804',
      ),
    ),
    's804' => 
    array (
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's805',
      ),
    ),
    's805' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's806',
      ),
    ),
    's806' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'CaseBlock',
        2 => 's807',
      ),
    ),
    's807' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 71,
      ),
    ),
    's858' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'go',
        1 => 's859',
      ),
    ),
    's859' => 
    array (
      'T_RIGHTBRACE' => 
      array (
        0 => 'go',
        1 => 's862',
      ),
      'T_CASE' => 
      array (
        0 => 'push',
        1 => 'CaseClauses',
        2 => 's860',
      ),
      'T_DEFAULT' => 
      array (
        0 => 'push',
        1 => 'DefaultClause',
        2 => 's861',
      ),
    ),
    's860' => 
    array (
      'T_RIGHTBRACE' => 
      array (
        0 => 'go',
        1 => 's862',
      ),
      'T_DEFAULT' => 
      array (
        0 => 'push',
        1 => 'DefaultClause',
        2 => 's863',
      ),
    ),
    's861' => 
    array (
      'T_RIGHTBRACE' => 
      array (
        0 => 'go',
        1 => 's864',
      ),
      'T_CASE' => 
      array (
        0 => 'push',
        1 => 'CaseClauses',
        2 => 's865',
      ),
    ),
    's862' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 72,
      ),
    ),
    's863' => 
    array (
      'T_RIGHTBRACE' => 
      array (
        0 => 'go',
        1 => 's866',
      ),
      'T_CASE' => 
      array (
        0 => 'push',
        1 => 'CaseClauses',
        2 => 's867',
      ),
    ),
    's864' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 73,
      ),
    ),
    's865' => 
    array (
      'T_RIGHTBRACE' => 
      array (
        0 => 'go',
        1 => 's868',
      ),
    ),
    's866' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 75,
      ),
    ),
    's867' => 
    array (
      'T_RIGHTBRACE' => 
      array (
        0 => 'go',
        1 => 's869',
      ),
    ),
    's868' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 74,
      ),
    ),
    's869' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 76,
      ),
    ),
    's880' => 
    array (
      'T_CASE' => 
      array (
        0 => 'push',
        1 => 'CaseClause',
        2 => 's881',
      ),
    ),
    's881' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 77,
      ),
      'T_CASE' => 
      array (
        0 => 'fold',
        1 => 77,
        2 => 's882',
      ),
    ),
    's882' => 
    array (
      'T_CASE' => 
      array (
        0 => 'push',
        1 => 'CaseClause',
        2 => 's883',
      ),
    ),
    's883' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 78,
      ),
      'T_CASE' => 
      array (
        0 => 'fold',
        1 => 78,
        2 => 's882',
      ),
    ),
    's896' => 
    array (
      'T_CASE' => 
      array (
        0 => 'go',
        1 => 's897',
      ),
    ),
    's897' => 
    array (
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's898',
      ),
    ),
    's898' => 
    array (
      'T_COLON' => 
      array (
        0 => 'go',
        1 => 's899',
      ),
    ),
    's899' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_VAR' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_IF' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_DO' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_WHILE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_FOR' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_BREAK' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_RETURN' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_WITH' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_LABEL' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_SWITCH' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_THROW' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_TRY' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's900',
      ),
      '[default]' => 
      array (
        0 => 'do',
        1 => 79,
      ),
    ),
    's900' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 79,
      ),
    ),
    's911' => 
    array (
      'T_DEFAULT' => 
      array (
        0 => 'go',
        1 => 's912',
      ),
    ),
    's912' => 
    array (
      'T_COLON' => 
      array (
        0 => 'go',
        1 => 's913',
      ),
    ),
    's913' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_VAR' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_IF' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_DO' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_WHILE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_FOR' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_BREAK' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_RETURN' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_WITH' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_LABEL' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_SWITCH' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_THROW' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_TRY' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'StatementList',
        2 => 's914',
      ),
      '[default]' => 
      array (
        0 => 'do',
        1 => 80,
      ),
    ),
    's914' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 80,
      ),
    ),
    's923' => 
    array (
      'T_LABEL' => 
      array (
        0 => 'go',
        1 => 's924',
      ),
    ),
    's924' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_VAR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_SEMICOLON' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_IF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_DO' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_WHILE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_FOR' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_CONTINUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_BREAK' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_RETURN' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_WITH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_LABEL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_SWITCH' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_THROW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_TRY' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_SCRIPT_END' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Statement',
        2 => 's925',
      ),
    ),
    's925' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 81,
      ),
    ),
    's936' => 
    array (
      'T_THROW' => 
      array (
        0 => 'go',
        1 => 's937',
      ),
    ),
    's937' => 
    array (
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's938',
      ),
    ),
    's938' => 
    array (
      'T_SEMICOLON' => 
      array (
        0 => 'go',
        1 => 's939',
      ),
    ),
    's939' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 82,
      ),
    ),
    's968' => 
    array (
      'T_TRY' => 
      array (
        0 => 'go',
        1 => 's969',
      ),
    ),
    's969' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Block',
        2 => 's970',
      ),
    ),
    's970' => 
    array (
      'T_CATCH' => 
      array (
        0 => 'push',
        1 => 'Catch',
        2 => 's971',
      ),
      'T_FINALLY' => 
      array (
        0 => 'push',
        1 => 'Finally',
        2 => 's972',
      ),
    ),
    's971' => 
    array (
      'T_FINALLY' => 
      array (
        0 => 'push',
        1 => 'Finally',
        2 => 's973',
      ),
      '[default]' => 
      array (
        0 => 'do',
        1 => 83,
      ),
    ),
    's972' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 84,
      ),
    ),
    's973' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 85,
      ),
    ),
    's988' => 
    array (
      'T_CATCH' => 
      array (
        0 => 'go',
        1 => 's989',
      ),
    ),
    's989' => 
    array (
      'T_LEFTPARENS' => 
      array (
        0 => 'go',
        1 => 's990',
      ),
    ),
    's990' => 
    array (
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Identifier',
        2 => 's991',
      ),
    ),
    's991' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's992',
      ),
    ),
    's992' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Block',
        2 => 's993',
      ),
    ),
    's993' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 86,
      ),
    ),
    's1002' => 
    array (
      'T_FINALLY' => 
      array (
        0 => 'go',
        1 => 's1003',
      ),
    ),
    's1003' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Block',
        2 => 's1004',
      ),
    ),
    's1004' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 87,
      ),
    ),
    's1025' => 
    array (
      'T_THIS' => 
      array (
        0 => 'go',
        1 => 's1026',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'go',
        1 => 's1031',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Identifier',
        2 => 's1027',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Literal',
        2 => 's1028',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Literal',
        2 => 's1028',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Literal',
        2 => 's1028',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Literal',
        2 => 's1028',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Literal',
        2 => 's1028',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Literal',
        2 => 's1028',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'ArrayLiteral',
        2 => 's1029',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'ObjectLiteral',
        2 => 's1030',
      ),
    ),
    's1026' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 88,
      ),
    ),
    's1027' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 89,
      ),
    ),
    's1028' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 90,
      ),
    ),
    's1029' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 91,
      ),
    ),
    's1030' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 92,
      ),
    ),
    's1031' => 
    array (
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'Expression',
        2 => 's1032',
      ),
    ),
    's1032' => 
    array (
      'T_RIGHTPARENS' => 
      array (
        0 => 'go',
        1 => 's1033',
      ),
    ),
    's1033' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 93,
      ),
    ),
    's1044' => 
    array (
      'T_NULL' => 
      array (
        0 => 'go',
        1 => 's1045',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'BooleanLiteral',
        2 => 's1046',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'BooleanLiteral',
        2 => 's1046',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'NumericLiteral',
        2 => 's1047',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'NumericLiteral',
        2 => 's1047',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'StringLiteral',
        2 => 's1048',
      ),
    ),
    's1045' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 94,
      ),
    ),
    's1046' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 95,
      ),
    ),
    's1047' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 96,
      ),
    ),
    's1048' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 97,
      ),
    ),
    's1055' => 
    array (
      'T_TRUE' => 
      array (
        0 => 'go',
        1 => 's1056',
      ),
      'T_FALSE' => 
      array (
        0 => 'go',
        1 => 's1057',
      ),
    ),
    's1056' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 98,
      ),
    ),
    's1057' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 99,
      ),
    ),
    's1064' => 
    array (
      'T_DECIMAL' => 
      array (
        0 => 'go',
        1 => 's1065',
      ),
      'T_HEXA' => 
      array (
        0 => 'go',
        1 => 's1066',
      ),
    ),
    's1065' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 100,
      ),
    ),
    's1066' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 101,
      ),
    ),
    's1071' => 
    array (
      'T_STRING' => 
      array (
        0 => 'go',
        1 => 's1072',
      ),
    ),
    's1072' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 102,
      ),
    ),
    's1083' => 
    array (
      'T_LEFTBRACKET' => 
      array (
        0 => 'go',
        1 => 's1084',
      ),
    ),
    's1084' => 
    array (
      '[default]' => 
      array (
        0 => 'push',
        1 => 'ArrayElements',
        2 => 's1085',
      ),
    ),
    's1085' => 
    array (
      'T_RIGHTBRACKET' => 
      array (
        0 => 'go',
        1 => 's1086',
      ),
    ),
    's1086' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 103,
      ),
    ),
    's1099' => 
    array (
      '[default]' => 
      array (
        0 => 'push',
        1 => 'ArrayElement',
        2 => 's1100',
      ),
    ),
    's1100' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 104,
      ),
      'T_COMMA' => 
      array (
        0 => 'fold',
        1 => 104,
        2 => 's1101',
      ),
    ),
    's1101' => 
    array (
      'T_COMMA' => 
      array (
        0 => 'go',
        1 => 's1102',
      ),
    ),
    's1102' => 
    array (
      '[default]' => 
      array (
        0 => 'push',
        1 => 'ArrayElement',
        2 => 's1103',
      ),
    ),
    's1103' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 105,
      ),
      'T_COMMA' => 
      array (
        0 => 'fold',
        1 => 105,
        2 => 's1101',
      ),
    ),
    's1110' => 
    array (
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1111',
      ),
      '[default]' => 
      array (
        0 => 'do',
        1 => 106,
      ),
    ),
    's1111' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 107,
      ),
    ),
    's1128' => 
    array (
      'T_LEFTBRACE' => 
      array (
        0 => 'go',
        1 => 's1129',
      ),
    ),
    's1129' => 
    array (
      'T_RIGHTBRACE' => 
      array (
        0 => 'go',
        1 => 's1130',
      ),
      'T_LABEL' => 
      array (
        0 => 'push',
        1 => 'PropertyNameAndValueList',
        2 => 's1131',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'PropertyNameAndValueList',
        2 => 's1131',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'PropertyNameAndValueList',
        2 => 's1131',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'PropertyNameAndValueList',
        2 => 's1131',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'PropertyNameAndValueList',
        2 => 's1131',
      ),
    ),
    's1130' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 108,
      ),
    ),
    's1131' => 
    array (
      'T_RIGHTBRACE' => 
      array (
        0 => 'go',
        1 => 's1132',
      ),
    ),
    's1132' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 109,
      ),
    ),
    's1171' => 
    array (
      'T_LABEL' => 
      array (
        0 => 'go',
        1 => 's1173',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'PropertyName',
        2 => 's1172',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'PropertyName',
        2 => 's1172',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'PropertyName',
        2 => 's1172',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'PropertyName',
        2 => 's1172',
      ),
    ),
    's1172' => 
    array (
      'T_COLON' => 
      array (
        0 => 'go',
        1 => 's1175',
      ),
    ),
    's1173' => 
    array (
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1176',
      ),
    ),
    's1174' => 
    array (
      'T_COMMA' => 
      array (
        0 => 'go',
        1 => 's1177',
      ),
    ),
    's1175' => 
    array (
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_LEFTBRACE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_TRUE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_FALSE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1178',
      ),
    ),
    's1176' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 111,
      ),
      'T_COMMA' => 
      array (
        0 => 'fold',
        1 => 111,
        2 => 's1174',
      ),
    ),
    's1177' => 
    array (
      'T_LABEL' => 
      array (
        0 => 'go',
        1 => 's1180',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'PropertyName',
        2 => 's1179',
      ),
      'T_STRING' => 
      array (
        0 => 'push',
        1 => 'PropertyName',
        2 => 's1179',
      ),
      'T_DECIMAL' => 
      array (
        0 => 'push',
        1 => 'PropertyName',
        2 => 's1179',
      ),
      'T_HEXA' => 
      array (
        0 => 'push',
        1 => 'PropertyName',
        2 => 's1179',
      ),
    ),
    's1178' => 
    array (
      '[default]' => 
      array (
        0 => 'do',
        1 => 110,
      ),
      'T_COMMA' => 
      array (
        0 => 'fold',
        1 => 110,
        2 => 's1174',
      ),
    ),
    's1179' => 
    array (
      'T_COLON' => 
      array (
        0 => 'go',
        1 => 's1181',
      ),
    ),
    's1180' => 
    array (
      'T_DELETE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1182',
      ),
      'T_VOID' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1182',
      ),
      'T_TYPEOF' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1182',
      ),
      'T_PLUSPLUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1182',
      ),
      'T_MINUSMINUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1182',
      ),
      'T_PLUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1182',
      ),
      'T_MINUS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1182',
      ),
      'T_TILDE' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1182',
      ),
      'T_BANG' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1182',
      ),
      'T_NEW' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1182',
      ),
      'T_THIS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1182',
      ),
      'T_LEFTPARENS' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1182',
      ),
      'T_FUNCTION' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1182',
      ),
      'T_WORD' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1182',
      ),
      'T_NULL' => 
      array (
        0 => 'push',
        1 => 'AssignmentExpression',
        2 => 's1182',
      ),
      'T_LEFTBRACKET' => 
      array (
        0 => 'push',
        1 => 'Assign