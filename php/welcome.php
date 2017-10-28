<!DOCTYPE HTML>
<html>
<body>

Welcome <?php 
$servername = "localhost";
$user = "root";
$pass = "password";
$dbname="LHdb";

$conn = new mysqli($servername,$user,$pass,$dbname);

echo $_POST["uname"]; ?><br>
Your email address is: <?php echo $_POST["psw"];
$sql="SELECT * from Security";
$result = $conn->query($sql);
while($row=$result->fetch_assoc()) 
    		{
				echo $row["SecurityID"];
      		}

//echo $result;
 ?>

</body>
</html> 
