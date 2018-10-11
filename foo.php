<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title>inedx</title>
</head>
<body>

<?php
/* $foo = 1;
echo $foo;

$bar = 2;
echo $bar;

$bar = $foo;*/
?> <p>$Bar tilldelas 1</p>

<?php
$bar = 1;
echo '$bar '.$bar."<br>";

echo '$foo = & $bar; ($foo och $bar delar minnesplats)<br>';

$foo = & $bar;
echo '$foo '.$foo."<br>";

echo '$bar tilldelas nutt värde vilket medför att $ffoo också ändras<br>';

$bar = 2;
echo '$foo '.$foo."<br>";

echo "7 dvärjar"+"1 snövit";

$bar++;

echo "7 dvärjar"."1 snövit<br><br>";

if (2!=2)
{
  echo "Sant<br>";
  }
  else{
    echo "Falskt<br>";
  }

  echo test();
 ?>

</body>
</html>

<?php

function test()
{
  //Vad som händer

echo "Hej från test<br>";
return 55;

}


?>
