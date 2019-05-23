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

<form action="filtrera.php" method="post">
  <p>Välj:
  <select name="val">
    <option value="fnamn">Förnamn</option>
    <option value="enamn">Efternamn</option>
    <option value="tfn">Telefon</option>
  </select>
</p>

  <p>Exakt matchning: <input type="radio" name="matchning" value="exaktmatchning"></p>
  <p>Partiell matchning: <input type="radio" name="matchning" value="partiellmatchning"></p>
  <p>Filtrera: <input type="text" name="sok"></p>
  <input type="submit" value="Sök">
</form>
  <br><br>

<table>
  <tr><td>Användarnamn</td><td>Förnamn</td><td>Efternamn</td><td>Telefon</td></tr>

  <?php


  $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
   $stmt = $db->query("SELECT username,fnamn,enamn,tfn FROM tb_users");
   while($row = $stmt->fetch())
   {

     echo "<tr><td>".$row['username']."</td><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

   }

    ?>
</table>


 <?php echo "<br><br>"?>
<a href="loggout.php">Logga ut</a>

   </body>
   </html>
