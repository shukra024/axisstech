<?php
include_once 'data.php';
$id = $_GET['userid'];
$result = mysqli_query($conn,"SELECT * FROM mon WHERE numbers = '$id'");
while($row = mysqli_fetch_array($result))
{
  $numbers = $row['numbers'];
  $title = $row['title'];
  $description = $row['description'];
  $dating = $row['dating'];
  $start_at = $row['start_at'];
}

$sql = "INSERT INTO remove (numbers,title,description,start_at,dating) VALUES ('$numbers', '$title', '$description', '$dating', '$start_at')";

mysqli_query($conn, $sql);

$sql2 = "DELETE FROM mon WHERE numbers = '$numbers'";
mysqli_query($conn,$sql2);

$sql3 = "SELECT * FROM remove";
$result3 = mysqli_query($conn,$sql3);
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

</style>

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
  <li><a class="active" href="day.php"><i class="fas fa-tasks" color="black"></i> <span class="">MY TASK</span></a></li>
  <li><a class="active" href="about.html"><i class="fa fa-heart fa-fw" color="black"></i> <span class="">ABOUT</span></a></li>
  </ul>
   </div>
  </nav>
  <br>


<div class="container">
  <table class="table table-striped">
    <thead>
<tr>
<td><font color="white" ><b>TASK NUMBER</b></font></td>
<td><font color="white" ><b>TASK TITLE</b></font></td>
<td><font color="white" ><b>TASK DESCRIPTION</b></font></td>
<td><font color="white" ><b>TASK DATE</b></font></td>
<td><font color="white" ><b>TASK TIME</b></font></td>
</tr>
</thead>
<?php
	$i=0;
	while($row = mysqli_fetch_array($result3)) {
	?>
 <tbody>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><font color="white" ><?php echo $row["numbers"]; ?></font></td>
<td><font color="white" ><?php echo $row["title"]; ?></font></td>
<td><font color="white" ><?php echo $row["description"]; ?></font></td>
<td><font color="white" ><?php echo $row["dating"]; ?></font></td>
<td><font color="white" ><?php echo $row["start_at"]; ?></font></td>
<td><a href="dltinfo.php?userid=<?php echo $row["numbers"]; ?>"><font color="#7FFFD4" size="+1" >DELETE</font></a></td>
</tr>
<?php
$i++;
}
?>
</tbody>
</table>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  </body>
</html>
