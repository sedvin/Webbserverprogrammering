<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title>uppgift9.1</title>
</head>
<body>

<form action="uppgift9.1.php" method="get">
  <input type="text" name="tal"><br>
  <input type="submit">
</form>

<?php
  echo $_GET['tal'];
  $tal = $_GET['tal'];
  // Innehåller $tal en siffra?
  // PHP har färdiga funktioner för de flesta behov
echo "<br><br>";

  siffra($tal);



  ?>
</body>
</html>


<?php
function siffra($x)
{
  if (is_numeric($x)){
    echo "$x är en siffra<br>";
    }
  else{
    echo "$x är en ingen siffra<br>";

  }


}


?>
