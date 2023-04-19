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
                Osoby towarzyszące
            </h1> </legend>
        <br />

        <?php

      for ($i=0;$i<$_SESSION['losob'];$i++) {


        echo "<input type = \"text\" name = \"imiona[]\" placeholder='imie' />";


           echo "<input type = \"text\" name = \"nazwizka[]\" placeholder='nazwizko' />  <br />";

      }
        ?>


    </fieldset>


    <input type="submit" value="Wyślij formularz" />
</form>
<a href="Z7.1.3.php"><button>Przejdź dalej</button></a>


</body>
</html>

