<?php
/*
 * Napisz funkcję, która wyświetli w konsoli tabliczkę mnożenia w formie kwadratu o bokupodanym jako parametr.
 */

function tabliczka($box){
    for($i=1;$i<=$box;$i++){
            for($j=1;$j<=$box;$j++){

                $tab[$i][$j]=$i*$j;
                echo $tab[$i][$j]." ";
            }
        echo "\n";
    }

}
tabliczka(10);