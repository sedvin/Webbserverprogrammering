<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title>Programmering</title>
</head>
<body>

<form action="index2.php" method="get">
<input type="text" name="tal1"><br>
<input type="text" name="tal2"><br>
<input type="submit">

</form>

<?php

//superglobal variabel

echo "tal1: ".$_GET['tal1']."<br>";
echo "tal2: ".$_GET['tal2']."<br>";
$Tal1 = $_GET['tal1'];
$Tal2 = $_GET['tal2'];
echo "Tal1: ".$Tal1."<br>";
echo "Tal2: ".$Tal2."<br>";

$summa = $Tal1+$Tal2;
echo "Summan är $summa";
echo "<br>"

 ?>



</body>
</html>
