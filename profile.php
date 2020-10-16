<?php
include_once 'data.php';
session_start();
$name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


    <title>PROFILE</title>

<style media="screen">
body
{
  background-color: black;
}
.container-fluid
{

  background-color: black;
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

.card-body
{
  background-color: black;
  height:flex;
width:600px;
border-radius: 15px;

}
.hovercard
{
  background-color:black;
  width:650px;
  align-items: center;
  border-radius: 15px;
  border-color:#7FFFD4;
  border-width:2px;
}
h1
{
font-size:120px;
}
.btn-primary
{
  background-color: black;
  border-radius: 15px;
  border-color:#7FFFD4;
  border-width:2px;
  width:600px;
}

</style>
<script type="text/javascript">
  $path = "pro_pic/{$_POST['avatar']}";
</script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg  navbar-light">
      <a class="navbar-brand"><B></b></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

  <ul class="nav navbar-nav navbar-right">
  <li><a class="active" href="index.php"><i class="fas fa-sign-out-alt" color="black"></i> <span class="">LOGOUT</span></a></li>
  <li><a class="active" href="home.html"><i class="fas fa-home" color="black"></i> <span class="">HOME</span></a></li>
  <li><a class="active" href="about.html"><i class="fa fa-heart fa-fw" color="black"></i> <span class="">ABOUT</span></a></li>
  </ul>
   </div>
  </nav>
  <br>

  <?php
include_once("data.php");
$sql = "SELECT * FROM user WHERE name = '$name'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $record = mysqli_fetch_assoc($resultset) ) {
  $img = $record['avatar'];
?>

<div class="row">
  <div class="col-12 col-md-6 menu">
    <center><h1><b>AQUA</b><br><b>TO-DO</b><br><b>NOTE</b></</h1></center>
  </div>
<div class="col-12 col-md-3 menu">
<div class="card hovercard">
<div class="cardheader">
  <div class="avatar">

  </div>
</div>

<div class="card-body info">
<div class="title">
  <img src="pro_pic/<?php echo $img;?>" width="200" height="200">
<font color="white" size="+2"><center><b>NAME : </b><?php echo $record['name']; ?></center></font>
</div>
<div class="desc"><font color="white" size="+2"><center><b>EMAIL :</b> <?php echo $record['email']; ?></center></font></div>
<div class="desc"><font color="white" size="+2"><center><b>PASSWORD :</b><?php echo $record['password']; ?></center></font></div>
</div>


<!--<div class="card-footer bottom">
<a class="btn btn-primary" href="edit.html">EDIT PROFILE
<i class="fas fa-user-edit"></i>
</a>
</div>-->

</div>
</div>

</div>
<?php } ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  </body>
</html>
