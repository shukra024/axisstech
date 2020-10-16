<?php
session_start();
$server = "localhost";
$uname = "root";
$pass = "";
$dbname = "todo";

include_once 'data.php';

if(isset($_POST['submit']))
{

  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);

  if(empty($name)||empty($password))
  {
    header("Location:./index.php?error=empty field");

  }

  else
  {
    $sql = "SELECT * FROM user WHERE name = '$name'";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck < 1)
    {
      echo("no username found") ;
    header("Location:./index.php?username=error");

    }

    else
    {
      $sql = "SELECT * from user WHERE password = '$password';";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);

      if($row['password'] == $password)
      {
        session_start();
        $_SESSION['name']    = $row['name'];

        header("Location:./home.html?Login=success");

      }
      else
      {
          header("Location:./index.php?error=error");
        
      }



    }

  }

}
