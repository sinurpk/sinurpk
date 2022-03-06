<?php

$string = "ZEESHAN";
$arr = array();
$i=0;
while(isset($string[$i])){
        $arr[$i] = $string[$i];
        $i++;
}
krsort($arr);
$final = implode("",$arr);

var_dump($final);
?>