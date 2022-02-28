
<?php

function pattern(){
    for($i = 0; $i < 8; $i++){
        for($j = 0; $j < $i; $j++){
            echo "*";
        }
        echo "\n";
    }

    for($i = 7; $i > 0; $i--){
        for($j = 0; $j < $i; $j++){
            echo "*";
        }
        echo "\n";
    }
}

pattern();

?>