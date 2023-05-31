<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator</title>
</head>

<body>
<form method="POST" action="Z4.2.php">
<h1>Kalkulator</h1>
<hr>
<br />
<h2>Kalkulator prosty</h2>
<!-------------------------Kalkulator-prosty----------------------------------->
<input name="liczba1" type="text">
<input name="liczba2" type="text">
<br>
<input name="dodaj" type="submit" value="Dodaj">
<input name="odejmij" type="submit" value="Odejmij">
<input name="pomnoz" type="submit" value="Pomnóż">
<input name="podziel" type="submit" value="Podziel">

<br><br>
<!----<input name="wynik" type="text">-------->

</form>
<?php
 //Liczby
$liczba1=$_POST["liczba1"];
 $liczba2=$_POST["liczba2"];

//--------------------------Obliczenia-------------------------------
//----------------dodawanie
if(isset($_POST["dodaj"])) {

   $wynik = $liczba1 + $liczba2;

    echo $wynik;

}
//---------------odejmowanie
if(isset($_POST["odejmij"])) {

    $wynik = $liczba1 - $liczba2;

    echo $wynik;

}
//------------------pomnoz
if(isset($_POST["pomnoz"])) {

    $wynik = $liczba1 * $liczba2;

    echo $wynik;

}
//-----------------podziel
if(isset($_POST["podziel"])) {
    if ($liczba2 == 0) {
        echo "liczba2 nie może być 0";

    }else {
        $wynik = $liczba1 / $liczba2;

        echo $wynik;

    }
}
?>


<!-------------------------------Kalkulator-złożony-------------------------------->


<br>
<h2>Kalkulator złożony</h2>
</body>
</html>
