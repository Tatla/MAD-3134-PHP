<html>
<head>
<title>
Home Page
</title>
	<link rel="stylesheet" href="login.css" />
	<style>
	body{background-image: url("p1.jpg");}
	a{
    color: black; 
    background-color: transparent; 
  font-size:30px;
  margin:10px;
  
	
}
</style>
	
	
</head>
<body>
<h1>Payroll System</h1>
<a href="payroll.php"><b>Home</b></a>
<a href="insert.php"><b>Add Employee</b></a>
<a href="login.html"><b>Login</b></a>
<?php    
    
include "MyDatabase.php"; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "C0709466_JaspreetKaur";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
echo "";
} 
$sql = "SELECT * FROM Employee_M";
$result = $conn->query($sql);

?>
<table id="t1">
  <tr>
  
    <th >Employee_ID</th>
    <th >Name</th>
    <th >Gender</th>
    <th >Birth_Date</th>
	 <th >Address</th>
	  <th >City</th>
	   <th >Province</th>
	    <th >Postal_Code</th>
		 <th >Email</th>
		  <th >Website_Link</th>
		   <th >Joining_Date</th>
		    <th >Annual_Basic_Pay</th>
			<th>Action</th>
  </tr>
  <?php

	if ($result->num_rows > 0) {
    	// output data of each row
   	while($row = $result->fetch_assoc()) {
		echo "<tr>";
			 echo "<td>" . $row["Employee_ID"]."</td>";
		 echo "<td>" .$row["Name"]."</td>";
		 echo "<td>" .$row["Gender"]."</td>";
		 echo "<td>" .$row["Birth_Date"]."</td>";
		 echo "<td>" .$row["Address"]."</td>";
	     echo "<td>"  .$row["City"]."</td>";
	     echo "<td>" .$row["Province"]."</td>";
		 echo "<td>"  .$row["Postal_Code"]."</td>";
		 echo "<td>"  .$row["Email"]."</td>";
		 echo "<td>" .$row["Website_Link"]."</td>";
		 echo "<td>" .$row["Joining_Date"]."</td>";
		 echo "<td>" .$row["Annual_Basic_Pay"]."</td>";
		 echo "<td><a href='delete.php?id=".$row['Employee_ID']."'>Delete</a></td>";
		  echo "<td><a href='update.php?id=".$row['Employee_ID']."'>Update</a></td>";
		 
		
        echo "</tr>";
		   }
	} else {
   	echo "0 results";
	}
	
?>

  </table>
 </body>
</html>