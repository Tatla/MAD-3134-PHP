<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="myDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
echo "Connected successfully";
}

/* Create database
 $sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully"; */
	
//use database
$sql = "USE myDB";
if ($conn->query($sql) === TRUE){
	echo "Database changed successfully"; 
}
/*	
	// sql to create tableS
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";



if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

} else {
    echo "Error creating database: " . $conn->error;
} 

 //$sql = "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('John', 'Doe', 'john@example.com')";
 $sql = "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('John', 'Doe', 'john@example.com');";
  $sql .= "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('Jo', 'Do', 'john@example.com');";
   $sql .= "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('J', 'D', 'john@example.com');";
   
   if ($conn->multi_query($sql) === TRUE) {

//if ($conn->query($sql) === TRUE) {
	$last_id=$conn->insert_id;
    echo "New record created successfully". $last_id . "<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}   */

//to display record on webpage
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
	//output data of each row
	while($row = $result->fetch_assoc()){
		echo "id:" . $row["id"]. "-Name:" .$row["firstname"]. "" .$row["lastname"]. "<br>";
	}
}else{echo "0 result";
}

$conn->close();
?>