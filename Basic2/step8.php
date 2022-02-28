<?php
$num;
function isPowerOfTwo($num){
if($num && (!($num & ($num - 1)))){
    return "$num is powred  by two";
}
else {
    return "is not powered";
}
}
echo isPowerOfTwo(32);
echo isPowerOfTwo(21);
?>