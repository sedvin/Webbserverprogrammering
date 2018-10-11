<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title>8.8</title>
</head>
<body>
  <form action="8.8.php" method="get">
    <input type="text" name="tal"> <br>
    <input type="submit">
  </form>

  <?php
  //SUPERGLOBAL ARRAY, ASSOCIATIV ARRAY
$tal = $_GET['tal'];



echo $tal;
for ($i=1; $i <= $tal; $i++)
  $summa = $summa+$i;

  echo $summa;



?>




 </body>
 </html>
