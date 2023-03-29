<!DOCTYPE html>
<html>
<head>
    <title>Zad4.4</title>
</head>

<body>
<fieldset>
    <legend>Podaj PESEL</legend>
<form method="POST" action="Z4.4.php">

    <label >Pesel:
        <input type="text" name="pesel" placeholder="00000000000"/><br /> <br />

    </label>
    <input type="submit" value="Prześlij">
</form>

</fieldset>

<?php

function pesel($pesel)
{
//------------------------------dzień
    $day = substr($pesel, 4, 2);

    //----------------------------miesiąc
    if (substr($pesel, 2, 1) % 2 == 0) {
        $montch = "0".substr($pesel, 3, 1);

    } else {
        $montch = "1" . substr($pesel, 3, 1);
    }
    //----------------------------rok

    if (substr($pesel, 2, 1) == 0 || substr($pesel, 2, 1) == 1) {
        $year = "19";

    } elseif (substr($pesel, 2, 1) == 2 || substr($pesel, 2, 1) == 3) {
        $year = "20";

    } elseif (substr($pesel, 2, 1) == 4 || substr($pesel, 2, 1) == 5) {
        $year = "21";

    }

    $year .= substr($pesel, 0, 2);


    //---------------------------płeć

    if (substr($pesel,9,1)%2==0){

        echo "Urodziłaś się w ".$day."-".$montch."-".$year."r.<br />";
        echo "Jesteś Kobietą";

    }else{

        echo "Urodziłeś się w ".$day."-".$montch."-".$year."r.<br />";
        echo "Jesteś Mężczyzną";

    }

}
pesel($_POST["pesel"]);

?>

</body>
</html>

