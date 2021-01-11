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
f