<?php
include_once "settings.php";
 ?>

 <!DOCTYPE html>
    <html lang="sv">
    <head>
      <meta charset="utf-8">
      <title> Favoritlag </title>

    </head>
    <body>
  <style>
      table, th, tr {border: 1px solid black;}

  </style>
      <table>



        <tr><th>Lag</th><th>Antal Supportrar</th></tr>


        <?php
        $nyttlag=$_POST['nyttfavlag'];

        echo $nyttlag;

        $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);

      $stmt = $db->query("SELECT tb_lag.lagnamn,tb_lag.antalsupportrar FROM tb_lag") // WHERE tb_users.fnamn='$fnamn'");
      /*$stmt = $db->query("SELECT * FROM tb_users WHERE fnamn='$fnamn'"); */
    /*    while ($row = $stmt->fetch() )

        {
          echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['fotbollslag']."</td></tr>";
        }


      //INSERT INTO `tb_users`(`fnamn`, `enamn`, `fotbollslag`) VALUES ([value-1],[value-2],[value-3]);



          ?>


*/

      </table>






    </body>

    </html>
