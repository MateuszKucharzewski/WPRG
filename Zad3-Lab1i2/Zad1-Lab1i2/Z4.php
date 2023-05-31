<?php

// Napisz funkcję, która z podanego numeru PESEL odczyta datę urodzenia i zwróci ją wformacie dd-mm-rr.


function pesel($pesel){
    if (strlen($pesel)!=11){
        return "Podany nr PESEL".$pesel." posiada więcej lub mniej niż 11 znaków.".'</br>';
    }else

        if (ctype_digit($pesel) === false) {
            return "W podanym nr PESEL ".$pesel." znajdują się litery".'</br>';

               }else return "You entered wrong PESEL number <br>";


        }

echo pesel('912k4628546');
echo pesel('159258462586');
echo pesel('03262330960');
