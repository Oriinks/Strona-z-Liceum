<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>te</title>


</head>
<body>

<?php
require_once"conf.php";
echo "dane zapisane w bazie danych \"AUTOKOMIS\"<br><br>";
// wyświetlamy treść naszej tabeli
$zapytanie = "SELECT `id`,`marka`, `rok`, `paliwo` , `pojemnosc`FROM `katalogtest`";
$idzapytania = mysqli_query($zapytanie);
echo '<table>';
while ($wiersz = mysqli_fetch_row($idzapytania)) {echo '<tr><td>numer rekordu: '. $wiersz[0] .'</td><td> marka: '. $wiersz[1] .'</td><td> rok produkcji: '. $wiersz[2] .'</td><td> rodzaj paliwa: '. $wiersz[3] .'</td><td> pojemność silnika: '. $wiersz[4] .'</td></tr>';}echo '</table>';
// zamykamy połączeniemysql_close($sql_conn); ?>


<form action="dopisz.php" method="post">
  <p><input value="Dodaj nowe wpisy" type="submit"></p>

</form>

<form action="usun.php" method="post">
Wpisz numer do usunięcia: <input name="iddel" type="text">
  <input value="USUŃ WSKAZANY WPIS" type="submit">
</form>

</body>
</html>
