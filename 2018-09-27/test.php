<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title>Array</title>
</head>
<body>
  <?php

$a = array("fo", "bar",4.4,5);
var_dump($a);
echo "<br><br>";
print_r($a);
$a[] = "Nytt värde";
echo "<br><br>";
var_dump($a);

echo "<br><br>";
echo "<br><br>";
echo "<br><br>";

$b = array("Sverige"=>"Stockholm","Norge"=>"Oslo");
echo "<br><br>";
var_dump($b);

echo "<br><br>";



$c=array("3"=>"Hej","4"=>"på");
echo "<br><br>";
var_dump($c);

$c[] = "dig";
echo "<br><br>";
var_dump($c);
echo $c[5];
echo "<br><br>";
echo $b["Sverige"];


echo 
   ?>

 </body>
 </html>
