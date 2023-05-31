<!DOCTYPE html>
<html>
<head>
    <title>Formularz kontaktowy</title>
</head>

<body>


<!----------------------------------Formularz---------------------------------------------->
<form name="formularz" method="post" action=" <?php echo $_SERVER["PHP_SELF"]?> " enctype="multipart/form-data">

    <input type="file" name="plik">
    <input type="submit" name="zatwierdz" value="Wyślij plik">

</form>

<?php
//if(isset($_POST["zatwierdz"]))
//{
//    if(isset($_FILES["plik"]))
//    {
//        $fileDescriptor = fopen($_FILES["plik"]["tmp_name"], "r");
//        var_dump($_FILES);
//    }
//}

?>

</body>
</html>
