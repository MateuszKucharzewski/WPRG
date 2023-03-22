<?php

/*
 * Napisz funkcję, która sprawdzi, czy dana liczba jest liczbą pierwszą.
 * W swoim programie umieść zmienną, która policzy wszystkie iteracje pętli, potrzebne dowykonania obliczeń.
 * Spróbuj tak zmodyfikować program, by było potrzeba jak najmniej iteracji (przy zachowaniu prawidłowego działania).
 */

function first($f){
    $ile=0;
    if($f==1){

        return false;
    }
    for($i=2;$i<=sqrt($f);$i++){
        $ile++;
        if($f%$i==0){

            return false;
        }


            }
    echo $ile."<br>";
    return true;

}
$i=2731;
if (first($i)) {

    echo "Podana liczba ". $i . " jest pierwsza";

}else echo "Podana liczba nie jest pierwsza";