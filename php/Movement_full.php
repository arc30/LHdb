<!DOCTYPE html>
<html>
<head>
	<title>Security</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

.nav{
            font-size: 18px !important;
            margin-top: 10px !important;
        }
        
        .container{
            z-index:1;
            left:0;
            line-height:80 px;
            margin: auto;
            margin-top:-100 px;
            position: absolute;
            top:45%;
            width: 100%;
            font-size: 40px;
        }
        body{
            text-align: center;
            z-index: 0;
        }

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin-top:80px;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!--<div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div> -->
    <ul class="nav navbar-nav">
      <!-- <li class="active"><a href="#">Home</a></li> -->
      <li><a href="../security.html"><b>Home</b></a></li>                <!--change this to security.html -->
      <li><a href="../normallogin.html">Normal Login</a></li>
      <li><a href="../latelogin.html">Late login</a></li>
        
        <li class="dropdown">
        <a style="color: white" class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Complete Status</b>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Movement_full.php">Normal Register</a></li>
          <li><a href="late.php">Late Register</a></li>
          
        </ul>
      </li>
        
    </ul>

	

    <ul class="nav navbar-nav navbar-right">
	<p class="navbar-text"><span class="glyphicon glyphicon-user"></span> xxxx</p>
      <li><a href="../login.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  

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

</body>
</html>
