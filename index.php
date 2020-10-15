<?php include 'login.php';?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <title>LOGIN</title>
<style media="screen">
body
{
  background-color: black;
}

/* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
}

h1
{
font-size:125px;
}


.form-container
{
	top: 50px;
	margin: auto;
	width: 20px;
	border: 3px solid white;
	border-radius: 25px;
	background-color: #0C090A;
	padding: 10px;
}

input[name=name], select {
  width: 100%;
  padding: 12px 20px;
  background-color:#bff2ff;
  margin: 8px 0;
  display: inline-block;
  border: 3px solid #bff2ff;
  border-radius: 25px;
  box-sizing: border-box;
}

input[name=password], select {
  width: 100%;
  padding: 12px 20px;
  background-color: #E0FFFF;
  margin: 8px 0;
  display: inline-block;
  border: 3px solid #E0FFFF;
  border-radius: 25px;
  box-sizing: border-box;
}


input[type=submit] {
  width: 100%;
  background-color:#7FFFD4;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 25px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #00FFFF;
  color: black;
}


.nav {
  margin: 0;
  font-family: Verdana;
}
.navbar {
  overflow: hidden;
  background-color: #7FFFD4;
  border-radius: 10px;
	top: 7px;

}
.navbar a {
  float: left;
  color: black;
  text-align: center;
  padding: 10px 16px;
  text-decoration: none;
  font-size: 16px;

}

.navbar a:hover {
  background-color: #E0FFFF;
  color: black;
}


</style>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light ">
      <a class="navbar-brand" href="#"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <div class="nav navbar-nav navbar-right">
<a class="active" href="signup.html"><i class="fas fa-user-plus" color="black"></i> <span class="">SIGNUP</span></a>
<li><a class="active" href="about.html"><i class="fa fa-heart fa-fw" color="black"></i> <span class="">ABOUT</span></a></li>
</div>
   </div>
 </div>
</nav>
<br>


<div class="row">
<div class="col-12 col-md-6 menu">
	<center><h1><b>AQUA</b><br><b>TO-DO</b><br><b>NOTE</b></</h1></center>
</div>

<div class="form-container col-12 col-md-5 right">
<form method="post" action="login.php">

 <b><center><font size = "4"><input type="text" id="user_id" name="name" style="font-family:Lucida Console" placeholder="USER NAME"></font></center></b>
 <b><center><font size = "4"><input type="password" id="pass" name="password" style="font-family:Lucida Console" placeholder="PASSWORD"><br></font></center></b>
 <b><font size = "4"><input name="submit" type="submit" id="submit" value="LOGIN" style="color:black"></font></b><br><br>
  <center><font color="white"><p>Create an Account <a href="signup.html"><font color="#7FFFD4">CLICK</font></a></p></font></center>

</form>
  </div>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
