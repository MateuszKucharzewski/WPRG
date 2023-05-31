<?php

//"function nazwa_metody(metoda)" - Utworzenie metody do, której można przypisac niewiadomą.

function promien($prom){

    echo "Promień koła wynosi:".$prom.'</br>';

    if ($prom<=0){

        return "Wartość promienia musi być większa od 0";

    }

    return "Średnica koła wynosi: ".(2*$prom);
}

echo promien(34).'<br>';
echo promien(-7).'<br>';
?>