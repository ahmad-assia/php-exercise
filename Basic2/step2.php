<?php

function greaterFn($num){
if($num < 10)
{
  echo "$num is less than 10\n";
}
elseif($num > 10 && $num <= 20){
  echo "$num is grater than 10\n";
}
elseif($num >20 && $num <= 30)
{ 
echo "$num is grater than 20\n";
}
else{
  echo "$num is grater than 30\n";
}
}
greaterFn(40);
greaterFn(21); 
greaterFn(12); 
greaterFn(8);  
?>