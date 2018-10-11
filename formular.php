<html>
<head>
  <title>
    Formulär
  </title>

  <meta charset="utf-8">
</head>
<body>


<form action="formular.php" method="get">
  <input type="text" name="firstname">
  <input type="text" name="lastname">
  <input type="submit" value="Skicka">
</form>

<?php
//Superglobal variabel
echo "Förnamn: ".$_POST['firstname']

?>

</body>
</html>
