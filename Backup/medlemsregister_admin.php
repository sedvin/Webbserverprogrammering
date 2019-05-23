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

<h1>Välkommen till Medlemsregistret, Admin</h1>

<form action="FILLER.php" method="post">
  <p>Välj: <form action="/action_page.php">
  <select name="val">
    <option value="fnamn">Förnamn</option>
    <option value="enamn">Efternamn</option>
    <option value="tfn">Telefon</option>
  </select>
</p>

  <p>Exakt matchning: <input type="radio" name="exaktmatchning"></p>
  <p>Partiell matchning: <input type="radio" name="partiellmatchning"></p>
  <p>Filtrera: <input type="text"></p>
  <input type="submit" value="Sök">
  <br><br>

<table>
  <tr><td>Användarnamn</td><td>Förnamn</td><td>Efternamn</td><td>Telefon</td><td>Admin</td></tr>

  <?php


  $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
   $stmt = $db->query("SELECT username,fnamn,enamn,tfn,admin FROM tb_users");
   while($row = $stmt->fetch())
   {

     echo "<tr><td>".$row['username']."</td><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td><td>".$row['admin']."</td></tr>";

   }

    ?>
</table>


 <?php echo "<br><br>"?>
<a href="loggout.php">Logga ut</a>

   </body>
   </html>
