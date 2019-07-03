<?php
	// Create connection
$conn = new mysqli("localhost", "id7548643_vivek", "admin", "id7548643_hooper");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*echo "Connected successfully <br>";*/

$var1 = $_GET['var1'];

$query = "UPDATE hooper SET counter1=$var1 where id=1;";
$result = mysqli_query($conn, $query);
if(isset($result)){
echo "Updated";	
}

?>
