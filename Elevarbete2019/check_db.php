<?php
session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];
include_once "settings_test.php";
$hash = password_hash($password, PASSWORD_DEFAULT);
try {
   $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
    $stmt = $db->query("SELECT * FROM tb_users WHERE username='$username' AND password='$password' LIMIT 1");
    if ($row = $stmt->fetch()) {


             header("location:welcome.php");
             $_SESSION['inloggad'] = true;
             $_SESSION['username'] = $row['username'];
             $_SESSION['fnamn'] = $row['fnamn'];
             $_SESSION['enamn'] = $row['enamn'];
             $_SESSION['admin'] = $row['admin'];
             $_SESSION['tfn'] = $row['tfn'];


             if($row['admin'] == 1)
             {
               $_SESSION['admin'] = "Ja";
             }
             else {
               $_SESSION['admin'] = "Nej";
             }

             exit();

    } else {
        $_SESSION['fel'] = "<h2>Användarnamnet och/eller lösenordet hittas inte</h2><a href=\"index1.php\">Logga in</a>";
              header("location:fel.php");
              exit();
    }
 }
catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die();
    $_SESSION['fel'] = "Något gick fel med databasen";
    header("location:fel.php");
    exit();
 }

$pdo = null;
header("Location: valkommen.php");
?>

<!-- Det finns en säkerhetsrisk med inloggningen samt
möjlighet att komma in på sidor man inte ska vara på
genom att använda URL, hinner inte åtgärda pga tidsbrist. -->
