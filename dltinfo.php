
<?php
include_once 'data.php';
$sql = "DELETE FROM remove WHERE numbers='" . $_GET["userid"] . "'";
if (mysqli_query($conn, $sql)) {
  	header("Location:./day.php?Record deleted successfully");

} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
