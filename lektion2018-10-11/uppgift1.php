<DOCTYPE html>
  <html lang="sv">
  <head>
    <meta charset="utf-8">
    <title>Miniräknare</title>

  </head>
  <body>



    <form name="mittFormular" action="uppgift1.php" method="post">

        <input type="text" name="tal1"> <br>
        <input type="text" name="tal2"> <br>


      <select name="val">
        <option value="Plus">+</option>
        <option value="Minus">-</option>
        <option value="Gånger">*</option>
        <option value="Delat">/</option>
      </select>

      <input type="submit" value="Räkna">
    </form>

    <?php

    $val = $_POST['val'];
    $tal1 = $_POST['tal1'];
    $tal2 = $_POST['tal2'];
    $svar;


    if($val == Plus)
    {
      $svar = $tal1+$tal2;
    }
    else if($val == Minus)
    {
      $svar = $tal1-$tal2;
    }
    else if($val == Gånger)
    {
      $svar = $tal1*$tal2;
    }
    else if($val == Delat)
    {
      $svar = $tal1/$tal2;
    }

    echo $svar;



     ?>


   </body>
   </html>
