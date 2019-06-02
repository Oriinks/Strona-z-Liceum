<?php
require_once"polaczenie.php";
$sql_conn = new mysqli($host,$login,$pass,$base)

or die('Nie mogłem połaczyć się z bazą danych');
mysqli_select_db($base);
?>
