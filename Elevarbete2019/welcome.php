
<?php
  session_start();
  if (!$_SESSION['inloggad'])
  {
    $_SESSION['fel'] = "<h2>Du är inte behörig att vara här</h2><a href=\"index1.php\">Logga in</a>";
    header("location:fel.php");
    exit();
  }
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
        padding: 3px;
      }
     </style>
   </head>
   <body>

<h1>Välkommen till sidan,

<?php echo $_SESSION['fnamn'] ?> <?php echo $_SESSION['enamn'] ?> </h1>

<table>
  <tr><td>Användarnamn</td><td><?php echo $_SESSION['username'] ?></td></tr>
  <tr><td>Förnamn</td><td><?php echo $_SESSION['fnamn'] ?></td></tr>
  <tr><td>Efternamn</td><td><?php echo $_SESSION['enamn'] ?></td></tr>
  <tr><td>Telefon</td><td><?php echo $_SESSION['tfn'] ?></td></tr>
</table>​

<br></br>


<a href="adminkontroll.php">Medlemsregister</a>
 <?php echo "<br><br>"?>
<a href="loggout.php">Logga ut</a>

   </body>
   </html>
