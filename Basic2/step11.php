<?php
$num;
function isPrime($num){
    for($i=2; $i<$num;$i++){
        if($num % $i ==  0 ){
            return "this is not a prime number \n";
        }
    }
    return "this is a prime number\n";
  
}
echo isPrime(7);
echo isPrime(12);
?>