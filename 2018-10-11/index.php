<DOCTYPE html>
  <html lang="sv">
  <head>
    <meta charset="utf-8">
    <title>Formulärdata hanteras av php</title>

  </head>
  <body>
    <form name="mittFormular" action="index.php" method="post">
      <select name="val">
        <option value="Tiger">Tiger</option>
        <option value="Lejon">Lejon</option>
        <option value="Katt">Katt</option>
      </select>

      <input type="submit" value="Gör ditt val">
    </form>

    <?php

    $val = $_POST['val'];

    echo $val;


     ?>

   </body>
   </html>
