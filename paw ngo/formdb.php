<?php
include_once 'dbconnection.php';
if(isset($_POST['save']))
{
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Amount = $_POST['Amount'];
	$Phone = $_POST['Phone'];
	$sql = "INSERT INTO donators_table VALUES('$Name','$Email','$Amount','$Phone')";
	if (mysqli_query($conn, $sql)){
		
		echo '<script>window.location.href = "https://rzp.io/l/HBPx5nnJCe";</script>';
	}
	else{
		echo "Error:" .$sql ."" .mysqli_error($conn);
	}
}mysqli_close($conn);
?>