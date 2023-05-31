<?php
/*
 * Napisz funkcję, która zawiera w sobie tablicę losowych liczb.
 *  Funkcja powinna zwracaćwartość elementu tablicy o indeksie podanym jako argument.
 */

function zwr($zmienna2){


    for ($i=0;$i<15;$i++){
        $zmienna1[$i] = rand(1,45);
    }
    return $zmienna1[$zmienna2];
}

echo zwr(5);
echo "\n";
echo zwr(10);