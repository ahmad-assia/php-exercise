<?php
function countWord($word, $sentence){
    $count = 0;
    $i = 0;
    $sentence = strtolower($sentence);
    $word = strtolower($word);
    
    $sentence = explode(" ", $sentence);
    $countSetence = count($sentence);
    
    while($i < $countSetence){
        if($sentence[$i] == $word){
            $count++;
        }
        $i++;
    }

    echo "$count \n";
}

countWord("assia", "my name is assia and the largest continent is assia");
?>  