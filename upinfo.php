
<?php
include_once 'data.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE mon set numbers='" . $_POST['numbers'] . "', title='" . $_POST['title'] . "', description='" . $_POST['description'] . "', dating='" . $_POST['dating'] . "' ,start_at='" . $_POST['start_at'] . "' WHERE numbers='" . $_POST['numbers'] . "'");
$message = "RECORD UPDATED SUCCESSFULLY";
}

$result = mysqli_query($conn,"SELECT * FROM mon WHERE numbers='" . $_GET['userid'] . "'");
$row= mysqli_fetch_array($result);

?>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

 <link rel="stylesheet" href="week.css">

 <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
 <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

 <title>UPDATE</title>

<style media="screen">
body
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

</style>
</head>
<body>    <nav class="navbar navbar-expand-lg  navbar-light">
      <a class="navbar-brand"><B></b></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

    <ul class="nav navbar-nav navbar-right">
    <li><a class="active" href="index.php"><i class="fas fa-sign-out-alt" color="black"></i> <span class="">LOGOUT</span></a></li>
    <li><a class="active" href="home.html"><i class="fas fa-home" color="black"></i> <span class="">HOME</span></a></li>
    <li><a class="active" href="update.php"><i class="fas fa-edit" color="black"></i> <span class="">UPDATE</span></a></li>
    <li><a class="active" href="about.html"><i class="fa fa-heart fa-fw" color="black"></i> <span class="">ABOUT</span></a></li>
    </ul>
    </div>
    </nav>
    <br><br>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>

<div class="row">
  <div class="form-container col-12 col-md-6">
<input type="hidden" name="numbers" class="txtField" value="<?php echo $row['numbers']; ?>">
<input type="text" placeholder=" TASK NUMBER" name="numbers"  value="<?php echo $row['numbers']; ?>" readonly>
<br>

<input type="text" placeholder="TITLE" name="title" class="txtField" value="<?php echo $row['title']; ?>">
<br>

<input type="text" name="description" placeholder="DESCRIPTION" class="txtField" value="<?php echo $row['description']; ?>">
<br>

<input type="date" name="dating" placeholder="DATE" class="txtField" value="<?php echo $row['dating']; ?>">
<br>

<input type="text" name="start_at" placeholder="RE-ENTER THE TIME OF THE TASK" class="txtField" value="<?php echo $row['start_at']; ?>">
<br>

<input type="submit" name="submit" value="Submit" class="buttom">
</div></div>
</form>
</body>
</html>
