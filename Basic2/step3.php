
<?php

function swap($var1,$var2){
    $x = $var1;
    $var1 = $var2;
    $var2 = $x;
    echo "$var1" ,
    "$var2";
    
}
swap(32,45);

?>