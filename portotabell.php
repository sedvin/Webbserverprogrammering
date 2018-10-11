<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title>Porto</title>
</head>
<body>
  <!--
  0-20 -> 5
  20-100 -> 10
  100- -> 20
-->
<form action="portotabell.php" method="get">
  <input type="text" name="vikt"><br>
  <input type="submit" value="Vad väger det?(g)">
</form>

<?php

echo $_GET['vikt']."<br>";
$vikt = $_GET['vikt'];
$pris;
if ($vikt <= 20)
{
  $pris = 5;
}

else if ($vikt <= 100)
{
  $pris = 10;
}

else if ($vikt > 100)
{
  $pris = 20;
}

else
{
  $pris = "Felaktigt invärde";
}

echo "Ett brev som väger $vikt gram kostar $pris kronor.<br>"



 ?>

</body>
</html>
