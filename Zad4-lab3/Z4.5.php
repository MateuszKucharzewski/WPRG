<!DOCTYPE html>
<html>
<head>
    <title>Formularz kontaktowy</title>
</head>

<body>
<form name="Formularz" method="post" action="Z4.5.php"> <fieldset> <legend><h1>
                Formularz kontaktowy
            </h1> </legend>
        <br />

        <!-------------------------Email--------------------------------->
       <label for="login">Login:</label>
            <input type="text" name="login" /><br />  <br />

        <!--------------------------Hasło--------------------------------->
      <label for="password">Hasło:</label>
            <input type="password" name="password" /><br /> <br />
    </fieldset>
    <input type="submit" value="Prześlij" /><br />

</form>

<?php

function logowanie($login, $password){
    if ($login=="alamakota" && $password=="1234"){
        header("location:Z4.2.php");
        exit();
    } else{

      echo "Nie udało się tobie zalogować";
      return;
    }

    //--------------------------wyświetlenie----------------
}
logowanie($_POST["login"],$_POST["password"])

?>

</body>
</html>
