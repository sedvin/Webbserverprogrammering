<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title>uppgift9.7</title>
</head>
<body>

<form action="uppgift9.7.php" method="get">
  <input type="text" name="tal"><br>
  <input type="submit">
</form>

<?php

$tal = $_GET['tal'];
primtal($tal);








 ?>

</body>
</html>

<?php
function primtal($x)
{

  for($i=2; $i<$x-1; $i++)
  {
    if ( ($x % $x) == 0)
    {

    echo "Inget primtal<br>";
    return;
    }

  echo "Du har hittat ett primtal<br>";
  }
 }
 ?>
