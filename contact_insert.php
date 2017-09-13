<?php

$username="root";
$password="";
$server="localhost";
$database="app_surat";


// $con = new mysqli($server,$username,$password);
// // Check connection
// if ($conn->connect_error)
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }

// $sql="INSERT INTO surat (prihal)
// VALUES
// ('$_POST[prihal]')";

// if (!mysqli_query($con,$sql))
//   {
//   die('Error: ' . mysqli_error($con));
//   }
//     echo "1 record added";

// mysqli_close($con);
// Create connection
$conn = new mysqli($server, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$sql="INSERT INTO surat (prihal)
	VALUES
	('$_POST[prihal]')";

	if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

?> 