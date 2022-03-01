<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "puppy_paw");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$amount = $_REQUEST['amount'];
		$phone = $_REQUEST['phone'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO donators_table VALUES ('$name',
			'$email','$amount','$phone')";
		
		if(mysqli_query($conn, $sql)){
			echo '<script>window.location.href = "https://rzp.io/l/Lwfqlrikc";</script>';

			echo nl2br("\n$name\n $email\n "
				. "$amount\n $phone\n");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
