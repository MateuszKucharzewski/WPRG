<?php
/*
 * Napisz program “jakiej jestem narodowości” z użyciem tablic asocjacyjnych.
 *  Programpowinien przyjmować nazwę kraju, a następnie w zawartej w nim tablicy sprawdzić,
 *  jak nazywa się odpowiednia narodowość - i tę narodowość zwrócić.
 */

function narodowosc($narodowosc){
    $tab = array(
        "Polska" => "Polakiem",
        "Amerykańska" => "Amerykaninem",
        "Niemiecka" => "Niemcem",
        "Czeska" => "Czechem",
        "Ślązka" => "Ślązakiem"
    );
    return $tab[$narodowosc];
}

echo "Skąd jesteś?\n";
$narodowosc = readline();
echo "Więc jestes ".narodowosc($narodowosc);

