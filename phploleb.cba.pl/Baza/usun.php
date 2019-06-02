<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>filtr</title>


</head>
<body>

<?php
require_once"conf.php";

echo "Znalezione dane - producent: ";
$prod = $_POST["iddel"];
echo "<b>".$prod."</b>";
// wyświetlamy treść naszej tabeli       DELETE FROM `katalogtest` WHERE `marka`=$prod";
$zapytanie = "DELETE FROM `katalogtest` WHERE `id`=$prod";
$idzapytania = mysql_query($zapytanie);

?>

<form action="index.php" method="post">
<input value="Wyświetl wszystko" type="submit"></form>

</body>
</html>
