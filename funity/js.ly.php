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
      'T