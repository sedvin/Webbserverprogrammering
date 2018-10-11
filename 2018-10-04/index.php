<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title>Array</title>
</head>
<body>
  <?php
$a = array("TYP", "ARRAY", "ALLTSÅ");
$langd = count($a);
echo $langd;

echo "<br>";

for ($i=0; $i<$langd; $i++)
echo $a[$i]." ";

//$a[]="Förstår du?";
array_push($a, "Förstår du?");
$langd = count($a);
echo "<br>";

for ($i=0; $i<$langd; $i++)
echo $a[$i]." ";


//ASSOSIATIVA ARRAYER, NYCKELN ÄR ETT ORD. "NYCKEL" => "VÄRDE"

//foreach ($a as $nyckel => $value)
//    echo $nyckel." ".$value."<br>"

$b = array("Sverige"=>"Stockholm","GAIS"=>"Bäst", "Glass"=>"Gott");
foreach ($b as $nyckel => $value)
{

  if ($nyckel=="GAIS")
    echo $nyckel." ".$value."<br>";

}




   ?>

 </body>
 </html>
