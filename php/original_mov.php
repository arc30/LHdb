<?php
$servername = "localhost";
$user = "root";
$pass = "password";
$dbname="LHdb";

$conn = new mysqli($servername,$user,$pass,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Movement"; 
$result = $conn->query($sql);
if($result->num_rows > 0)
{
	echo "<table>"; 
	echo "<tr><th>Roll No:</th><th>Security ID</th><th>Place</th><th>Time Out</th><th>Time In</th><th>Early Permission</th><th>Late Permission</th><th>Remarks</th></tr>";
	while($row=$result->fetch_assoc())
	{  
		echo "<tr><td>" . $row['Student_RollNo'] . "</td><td>" . $row['Security_SecurityID'] . "</td><td>". $row['Place'] . "</td><td>". $row['TimeOut'] . "</td><td>". $row['TimeIn'] . "</td><td>". $row['EarlyPTime'] . "</td><td>". $row['LatePTime'] . "</td><td>". $row['Remarks'] . "</td></tr>";  
	}
	echo "</table>"; 
}
else
	echo "nothing";


$conn->close();
?>
