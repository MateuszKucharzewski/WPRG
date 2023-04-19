
<?php
session_start();

if (isset($_POST['imiona'])){
    $_SESSION["imiona"]=$_POST['imiona'];
}

if (isset($_POST['nazwizka'])){
    $_SESSION["nazwizka"]=$_POST['nazwizka'];
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Bilety</title>
</head>

<body>
<form name="Formularz" method="post"> <fieldset> <legend><h1>
                Podsumowanie
            </h1> </legend>
        <br />

        <?php
echo "imie i nazwizko: ".$_SESSION['imie']." ".$_SESSION['nazwizko']." e-mail: ".$_SESSION['e-mail']." numer karty: ".$_SESSION['cardnumber']."<br /><br />" ;

        for ($i=0;$i<$_SESSION['losob'];$i++) {
            echo($i+1)." Osoba: ".$_SESSION['imiona'][$i]." ".$_SESSION['nazwizka'][$i]."<br />";
        }
        ?>


    </fieldset>


    <input type="submit" value="Wyślij formularz" />
</form>
<a href="Z7.1.1.php"><button>Przejdź do strony początkowej</button></a>

<?php

session_destroy();

?>

</body>
</html>

