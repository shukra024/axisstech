<?php

session_start();
$server = "localhost";
$uname = "root";
$pass = "";
$dbname = "todo";

$conn = mysqli_connect($server,$uname,$pass,$dbname);
if(isset($_POST['submit']))
{

	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
	$cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);

	if(empty($name)||empty($email)||empty($password)||empty($cpassword))
	{
		echo "empty fields";
	}


	else
	{
		$sql = "SELECT * FROM user WHERE name = '$name'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);


		if($resultCheck > 0)
		{
			echo "Id already in use";


		}

		else
		{


					$sql = "INSERT into user (name,email,password,cpassword) VALUES ('$name','$email','$password','$cpassword');";

					mysqli_query($conn,$sql);


					header("Location:./index.php");







		}

	}

}

else
{
	//header("Location:./index.php?login=error");
	exit();
}

?>
