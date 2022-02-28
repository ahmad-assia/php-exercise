<?php
function stars(){

    while($i <= 8){
        $j=1;
        while($j<$i){
            $j++;
            echo "*";
            
        }
        echo "\n";
        $i++;
    }
}
echo stars();

?>?>