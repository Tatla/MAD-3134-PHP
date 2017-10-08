
<?php
include "MyDatabase.php"; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "C0709466_JaspreetKaur";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
echo "";
}

//var_dump($_POST);

if(isset($_POST['Delete']))
  {
	  $id = $_GET['id'];

	  
$query  = mysqli_connect($conn,"DELETE FROM employee_m WHERE Employee_ID='$id'");
		//$sql = mysql_query($query,$conn);
		//$sql = $conn->query($query);
		
	//echo "$query";
			header("Location: payroll.php");
			
			
	//echo $query;
		
    
?>