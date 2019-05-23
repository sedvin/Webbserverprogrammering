<?php
session_start();
include_once "settings_test.php";
?>
<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Hemlig sida</title>
      <style>
      table {
          border-collapse: collapse;
      }
      td {
        border-style: solid;
        border-width: 2px;
        padding: 7px;
      }
     </style>
   </head>
   <body>

<h1>Välkommen till Medlemsregistret</h1>

<table>
  <tr><td>Förnamn</td><td>Efternamn</td><td>Telefon</td></tr>

  <?php


  $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
   $stmt = $db->query("SELECT fnamn,enamn,tfn FROM tb_users");
   while($row = $stmt->fetch())
   {

     echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

   }

    ?>
</table>

 <?php echo "<br><br>"?>
<a href="loggout.php">Logga ut</a>

   </body>
   </html>
