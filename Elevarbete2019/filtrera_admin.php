<?php
session_start();
include_once "settings_test.php";
?>
<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Filtrera Admin</title>
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

     <table>
       <tr><td>Förnamn</td><td>Efternamn</td><td>Telefon</td></tr>


<?php

$val1 = $_POST["val"];
$val2 = $_POST["matchning"];
$val3 = $_POST["sok"];

if($val1 == "fnamn")
{
  if($val2 == "exaktmatchning")
  {

    $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
     $stmt = $db->query("SELECT fnamn,enamn,tfn FROM tb_users WHERE fnamn LIKE '$val3' ORDER BY fnamn");
     while($row = $stmt->fetch())
     {

       echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

     }

  }
  else if($val2 == "partiellmatchning")
  {

    $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
     $stmt = $db->query("SELECT fnamn,enamn,tfn FROM tb_users WHERE fnamn LIKE '%$val3%' ORDER BY fnamn");
     while($row = $stmt->fetch())
     {

       echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

     }

  }
  else
  {
  $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
   $stmt = $db->query("SELECT fnamn,enamn,tfn FROM tb_users ORDER BY fnamn");
   while($row = $stmt->fetch())
   {

     echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

   }
   }
 }

   else if($val1 == "enamn")
   {
     if($val2 == "exaktmatchning")
     {

       $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
        $stmt = $db->query("SELECT fnamn,enamn,tfn FROM tb_users WHERE enamn LIKE '$val3' ORDER BY enamn");
        while($row = $stmt->fetch())
        {

          echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

        }

     }
     else if($val2 == "partiellmatchning")
     {

       $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
        $stmt = $db->query("SELECT fnamn,enamn,tfn FROM tb_users WHERE enamn LIKE '%$val3%' ORDER BY enamn");
        while($row = $stmt->fetch())
        {

          echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

        }

     }
     else
     {
     $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
      $stmt = $db->query("SELECT fnamn,enamn,tfn FROM tb_users ORDER BY enamn");
      while($row = $stmt->fetch())
      {

        echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

      }
      }
   }

   else if($val1 == "tfn")
   {
     if($val2 == "exaktmatchning")
     {

       $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
        $stmt = $db->query("SELECT fnamn,enamn,tfn FROM tb_users WHERE tfn LIKE '$val3' ORDER BY tfn");
        while($row = $stmt->fetch())
        {

          echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

        }

     }
     else if($val2 == "partiellmatchning")
     {

       $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
        $stmt = $db->query("SELECT fnamn,enamn,tfn FROM tb_users WHERE tfn LIKE '%$val3%' ORDER BY tfn");
        while($row = $stmt->fetch())
        {

          echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

        }

     }
     else
     {
     $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
      $stmt = $db->query("SELECT fnamn,enamn,tfn FROM tb_users ORDER BY tfn");
      while($row = $stmt->fetch())
      {

        echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

      }
      }
   }



   ?>


   </table>
</body>
</html>
