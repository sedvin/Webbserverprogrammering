<?php
include_once "settings.php"
 ?>


<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title>Data från index.php skickas hit</title>
</head>
<body>
  <table>
    <tr><th>Förnamn</th><th>Efternamn</th><th>Resultat</th></tr>


<?php
$fnamn=$_POST['fnamn'];

echo $fnamn;

$db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);

$stmt = $db->query("SELECT tb_users.fnamn,tb_users.enamn,tb_users.tfn,tb_users.resultat FROM tb_users,tb_resultat WHERE tb_users.nyckel=tb_resultat.foreign_nyckel AND tb_users.fnamn='$fnamn'");
if ($row = $stmt->fetch() ) {
  echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td><td>".$row['resultat']."</td></tr>";

}


  ?>

</table>

</body>
</html>
