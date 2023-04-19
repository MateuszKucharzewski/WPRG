<?php
session_start();

if (isset($_POST['imie'])){
$_SESSION["imie"]=$_POST['imie'];
}

if (isset($_POST['nazwizko'])){
    $_SESSION["nazwizko"]=$_POST['nazwizko'];
}

if (isset($_POST['e-mail'])){
    $_SESSION["e-mail"]=$_POST['e-mail'];
}

if (isset($_POST['cardnumber'])){
    $_SESSION["cardnumber"]=$_POST['cardnumber'];
}

if (isset($_POST['password'])){
    $_SESSION["password"]=$_POST['password'];
}

if (isset($_POST['losob'])){
    $_SESSION["losob"]=$_POST['losob'];
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Bilety</title>
</head>

<body>
<form name="Formularz" method="post"> <fieldset> <legend><h1>
                Informacje o kupującym
            </h1> </legend>
        <br />

        <!-------------------------Imie--------------------------------->
        <li>  <label for="imie">Imię:</label>
            <input type="text" name="imie" /><br /> </li> <br />

        <!----------------------Nazwisko------------------------->
        <li> <label for="nazwizko">Nazwisko:</label>
            <input type="text" name="nazwizko" /> <br /> </li> <br />

        <!-------------------------Email--------------------------------->
        <li>  <label for="e-mail">E-mail:</label>
            <input type="text" name="e-mail" /><br /> </li> <br />

        <!------------------------Nr karty--------------------------------->
        <li> <label for="number">Podaj nr Karty:</label>
            <input type="number" id="cardnumber" name="cardnumber"> </li> <br />

        <!----------------------------Hasło------------------------------->

        <li> <label for="password">Podaj hasło:</label>
        <input type="password" id="password" name="password">
        </li> <br />

        <!----------------------------LiczbaOsób------------------------->
        <li>  <label for="losob">Podaj liczbę osób:</label>
            <input type="number" name="losob" /><br /> </li> <br />



    </fieldset>

    <input type="submit" value="Wyślij formularz" />
</form>
<a href="Z7.1.2.php"><button>Przejdź dalej</button></a>

</body>
</html>

