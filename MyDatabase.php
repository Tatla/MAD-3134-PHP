<?php
class createD{
	
function getData(){
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
echo "Connected successfully";
}
$sql = "SELECT * FROM Employee_M";
$this->result = $conn->query($sql);
		return $this->result;	
	}
	
	function conn(){
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
echo "Connected successfully";
}


// Create database
/* $sql = "CREATE DATABASE C0709466_JaspreetKaur";
if ($conn->query($sql) === TRUE) {
       echo "Database created successfully";
}*/
	   //use database
$sql = "USE C0709466_JaspreetKaur";
if ($conn->query($sql) === TRUE){
	echo "Database changed successfully"; 
		// sql to create tableS
$sql = "CREATE TABLE Employee_M (
Employee_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Name VARCHAR(30) NOT NULL,
Gender VARCHAR(30) NOT NULL,
Birth_Date VARCHAR(50),
Address VARCHAR(50),
City VARCHAR(50),
Province VARCHAR(50),
Postal_Code VARCHAR(50),
Email VARCHAR(50),
Website_Link VARCHAR(50),
Joining_Date VARCHAR(50),
Annual_Basic_Pay VARCHAR(50)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Employee_Master created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
}else {
    echo "Error creating database: " . $conn->error;
}
}

function select(){
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
	

 echo "<table>
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
  </tr>
 
  ";

	
	//to display record on webpage
$sql = "SELECT * FROM Employee_M";
$this->result = $conn->query($sql);

if ($this->result->num_rows > 0) {
    // output data of each row
    while($row = $this->result->fetch_assoc()) {
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
		 echo "</tr>";
         echo "</table>";
		    
	}
}else{echo "0 result";
}
}
function delete(){
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
echo "Connected successfully";
}	
}


}

//$obj = new createD;
//$obj->conn();
//$obj->insert();
//$obj->select();
?>