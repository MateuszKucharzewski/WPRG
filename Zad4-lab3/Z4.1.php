<!DOCTYPE html>
<html>
<head>
    <title>Formularz kontaktowy</title>
</head>

<body>
<form name="Formularz" method="post"> <fieldset> <legend><h1>
                Formularz kontaktowy
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

    <!------------------------Nr telefonu--------------------------------->
   <li> <label for="phone">Nr tel:</label>
       <input type="tel" id="phone" name="phone" placeholder="123-456-789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}"> </li> <br />
<!----------------------------------Select------------------------------------------------>

<li> Wybierz temat: <select name="wybor">
     <option value="0"> 1 opcja </option>
     <option value="1"> 2 opcja </option>
     <option value="2"> 3 opcja </option>
     <option value="3"> 4 opcja </option>

 </select>

</li> <br />
<!--------------------------------Wiadomość-------------------------------------->
        <li>Treść wiadomości*
        <textarea name="widomosc" placeholder="Wpisz treść wiadomości... "></textarea>

        </li> <br />


<!-------------------------wybor em/tel--------------------------------->
   <li> Preferowana metoda kontaktu: <br />
    <input type="checkbox" name="check" value="1" /> E-mail <br />
    <input type="checkbox" name="check" /> nr telefonu <br />
   </li> <br />

    <!-------------------------WWW-------------------------------->
<li>
    Posiadasz stronę www? <br />
    <input type="radio" name="opcja" value="1" /> Tak <br />
    <input type="radio" name="opcja" value="2" /> Nie <br />

    <br />
</li> <br />
        <!----------------------------Dodaj plik------------------------------------------>
  <li>
      Załącznik <br />
      <input type="file" value="zalacznik" /> </li> <br />

        </fieldset>
    <input type="submit" value="Wyślij formularz" /><br />

</form>

<?php
echo "<ul>";

echo "<li>".$_POST["imie"]."</li>";

echo "<li>".$_POST["nazwizko"]."</li>";

echo "<li>".$_POST["e-mail"]."</li>";

echo "<li>".$_POST["phone"]."</li>";

echo "<li>".$_POST["wybor"]."</li>";

echo "<li>".$_POST["widomosc"]."</li>";

echo "<li>".$_POST["check"]."</li>";

echo "<li>".$_POST["opcja"]."</li>";

echo "<li>".$_POST["zalacznik"]."</li>";

echo "</ul>";
?>

</body>
</html>
