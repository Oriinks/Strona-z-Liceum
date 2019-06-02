<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<body>

<?php
require_once"conf.php";

// tworzymy tabelę
$zapytanie = 'CREATE TABLE katalogtest (id int NOT NULL AUTO_INCREMENT, marka char(30),rok int, paliwo char(10), pojemnosc int,  PRIMARY KEY(id))';
$idzapytania = mysqli_query($zapytanie);

// dodajemy dane do tabeli

$mar = $_POST["marka"];
$rok= $_POST["rok"];
$pal= $_POST["paliwo"];
$poj= $_POST["pojemnosc"];


$zapytanie = "INSERT INTO `katalogtest` (`id`, `marka`, `rok`, `paliwo` , `pojemnosc`) VALUES ('', '$mar', '$rok', '$pal', '$poj')";
$idzapytania = mysqli_query($zapytanie);


echo "dane zapisane w bazie danych \"AUTOKOMIS\"<br><br>";

// wyświetlamy treść naszej tabeli
$zapytanie = "SELECT `id`,`marka`, `rok`, `paliwo` , `pojemnosc`FROM `katalogtest`";
$idzapytania = mysqli_query($zapytanie);

echo '<table>';
while ($wiersz = mysqli_fetch_row($idzapytania)) {echo '<tr><td>numer rekordu: '. $wiersz[0] .'</td><td> marka: '. $wiersz[1] .'</td><td> rok produkcji: '. $wiersz[2] .'</td><td> rodzaj paliwa: '. $wiersz[3] .'</td><td> pojemność silnika: '. $wiersz[4] .'</td></tr>';}echo '</table>';

// zamykamy połączeniemysql_close($sql_conn); ?>


<form action="index.php" method="post">

<p><input type="submit" value="Powrót do strony głównej" /></p>

</form>




</body>

</form>
