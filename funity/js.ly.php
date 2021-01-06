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
 return new js_print(new js_literal_string($t