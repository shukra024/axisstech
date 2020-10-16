<?php

include_once 'data.php';
if(isset($_POST['mon']))
{
	$numbers = $_POST['numbers'];
	 $title = $_POST['title'];
	$description = $_POST['description'];
	$dating = $_POST['dating'];
	$start_at = $_POST['start_at'];

	 $sql = "INSERT INTO mon (numbers,title,description,dating,start_at)
	 VALUES ('$numbers','$title','$description','$dating','$start_at')";
	 if (mysqli_query($conn, $sql)) {
		header("Location:./week.html");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
end_at
