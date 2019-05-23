<?php
session_start();
include_once "settings.php";
?>

<html>
<head>
  <title>
    Index
  </title>

  <meta charset="utf-8">
</head>
<body>


<?php
$user = $_POST["username"];
//echo $user;
$pass = $_POST["password"];
//echo $pass;


$db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);

     $stmt = $db->query("SELECT tb_users.username,tb_users.password FROM tb_users WHERE tb_users.username='$user' AND tb_users.password='$pass'");
     if($row = $stmt->fetch())
      {

        $_SESSION['inloggad'] = "sant";
        echo "HITTAS<br>";


      }
    else
        {

           $_SESSION['inloggad'] = "falskt";
           echo "HITTAS INTE<br>";


        }



 ?>






</body>
</html>
