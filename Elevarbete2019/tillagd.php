<?php
include_once "settings_test.php"
 ?>

<!DOCTYPE html>

<html lang="sv">
<head>
<meta charset="utf-8">

<title>Tillagd medlem</title>

</head>
<body>

  <?php

  $username=$_POST['username'];
  $password=$_POST['password'];
  $fnamn=$_POST['fnamn'];
  $enamn=$_POST['enamn'];
  $tfn=$_POST['tfn'];
  $admin=$_POST['admin'];



 try {

  $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
  $sql = "INSERT INTO tb_users (username,password,fnamn,enamn,tfn,admin) VALUES ('$username','$password','$fnamn','$enamn','$tfn','$admin')";
  $stmt= $db->prepare($sql);
  $stmt->execute();

} catch (PDOException $e) {

echo 'Connection failed: ' . $e->getMessage();

}

?>

<h1>En ny medlem har lagts till </h1> <br>
<a href="index1.php">Logga in</a>

</body>
</html>
