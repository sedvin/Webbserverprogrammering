<?php

session_start();
if($_SESSION['admin'] == 'Ja')
{
header("Location: medlemsregister_admin.php");

}
else {

  header("Location: medlemsregister.php");
}
?>
