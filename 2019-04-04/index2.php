<?php
  session_start();

if (isset($_POST['username']) && (strlen($_POST['username'] > 0)) && (strlen($_POST['username'] <= 15)))
{
  $username = strip_tags($_POST['username']);

  if(preg_match("/[s \\ \/]/",$username))
  {
    $_SESSION['fel'] = "Användarnamnet felaktigt";
    header("location:fel.php");
    exit();

}
  exit();

  }
  else {
        $_SESSION['fel'] = "Användarnamnet för kort eller för långt";
        header("location:fel.php");
        exit();

  }



  if (isset($_POST['password']) && (strlen($_POST['password'] > 0)) && (strlen($_POST['password'] <= 15)))
  {
    $password = strip_tags($_POST['password']);

    if(preg_match("/[s \\ \/]/",$password))
    {
      $_SESSION['fel'] = "Lösenordet felaktigt";
      header("location:fel.php");
      exit();

  }

  exit();

    }
    else {
          $_SESSION['fel'] = "Lösenordet för kort eller för långt";
          header("location:fel.php");
          exit();

    }

    $_SESSION['fel'] ="Utmärkt";
    header("location:fel.php");


 ?>
