<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "task1";
// Create connection
$conn =mysqli_connect($servername, $username, $password,$dbname);
if($conn)
{
	echo "success";
}
else
{
	echo mysqli_error($con);
}

// Check connection
     

?>