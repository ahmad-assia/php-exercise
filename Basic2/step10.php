<?php
$str;
function checkPalaindrom($str){
    if(strrev($str) == $str){
        return "yes\n";
    }
    else {
        return "no\n";
    }
}
echo checkPalaindrom("rima");
echo checkPalaindrom("madam");
?>