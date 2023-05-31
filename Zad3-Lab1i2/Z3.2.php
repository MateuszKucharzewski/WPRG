<?php
/*
 * Zmodyfikuj funkcję z zadania 1.1, by przyjmowała argument - liczbę rzutów kostką. I zwracała tablicę wyników.
 */

function roll($n) {
    for ($i=0;$i<$n;$i++){

        $tab[$i]=rand(1,6);

    }

print_r($tab);
}
 roll(5);



