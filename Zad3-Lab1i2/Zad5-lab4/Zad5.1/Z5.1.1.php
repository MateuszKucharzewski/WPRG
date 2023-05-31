<!DOCTYPE html>
<html>
<head>
    <title>Zad5.1.1</title>
</head>

<body>
<form name="Formularz" method="post"> <fieldset> <legend><h1>
                Data
            </h1> </legend>


        <!-------------------------Data_ur--------------------------------->
        Podaj datę urodzenia :
        <input name="data" type="date" /><br />
        <input name="wyswietl" type="submit" value="Wyświetl datę urodzenia " /><br />

    </fieldset>
</form>

<?php
//
//if($_SERVER["REQUEST_METHOD"]=="POST"){
//
//    if(isset($_POST['data']))
//        var_dump($_POST["data"]);
//    echo "</br>";
//    echo is_numeric($_POST['data'])? "Yes" : "No";
//}

echo $_POST['data'];

?>

</body>
</html>
