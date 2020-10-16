<?php
function_alert("error");

function function_alert($msg) {

}
?>
<?php


include_once("data.php");
if(isset($_POST['submit']))
{

	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);

	if(empty($name)||empty($email)||empty($password)||empty($cpassword))
	{
		  echo "<script type='text/javascript'>alert('$msg');</script>";
	}


	else
	{
					$sql = "SELECT * FROM user WHERE name ='$name'";
					$result = mysqli_query($conn,$sql);
					$resultCheck = mysqli_num_rows($result);

					if($resultCheck > 0)
					{
						header("Location:./signup.html?error=User name taken");

					}
					 else
					{

							if(isset($_FILES['file']['name']))
							{
								$fileName = $_FILES['file']['name'];
								$fileTempName = $_FILES['file']['tmp_name'];
								$_FILESize = $_FILES['file']['size'];
								$fileError = $_FILES['file']['error'];
								$fileType = $_FILES['file']['type'];


								$fileExt = explode('.', $fileName);
								$actExt = strtolower(end($fileExt));
								$allowed = array('jpg','jpeg','png');

								if(in_array($actExt, $allowed))
								{
									if($fileError === 0)
									{
										if($_FILESize < 10000000)
										{
											$newName = uniqid('', true).".".$actExt;
											$des = 'pro_pic/'.$newName;


											$sql = "INSERT INTO user(name, email, password, cpassword,avatar) VALUES ('$name', '$email', '$password', '$cpassword','$newName');";
											mysqli_query($conn,$sql);
											move_uploaded_file($fileTempName,$des);

											header("Location:./index.php?success=registered successfully");

											session_start();

										}
										else
										{
											header("Location:./signup.html?error=file too big");

										}


									}
									else
									{
										header("Location:./signup.html?error=error");

									}

								}

								else
								{
									header("Location:./signup.html?error=error12");

								}
							}

							else
							{
								header("Location:./signup.html?error=error13");
							}

					}
	}

}

else
{
	//header("Location:./index.php?login=error");
	exit();
}

?>
