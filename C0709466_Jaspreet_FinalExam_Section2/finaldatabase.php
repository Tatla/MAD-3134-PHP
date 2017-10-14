<?php
$servername = "localhost";
  $user = "root";
  $pass = "";
  $database="finalexam";
// Create connection
  $conn = new mysqli($servername, $user, $pass);

// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $sql = "CREATE DATABASE finaldatabase";
  if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
  }
  else
  {
    echo  "Error creating database: " . $conn->error;
}// use database
$sql=" USE finaldatabase";
if ($conn->query($sql) === TRUE) {
  echo "Databse change successfully";

}
else
{
  echo  "Error using database: " . $conn->error;
}

// sql to create tableS
$sql = "CREATE TABLE login (
 
userName VARCHAR(30) NOT NULL,
Password VARCHAR(30) NOT NULL

)"; 
if ($conn->query($sql) === TRUE) {
    echo "Table login created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


  $sql= "INSERT INTO login (userName, Password)VALUES ('admin', 'admin123');";
   $sql .= "INSERT INTO login (userName, Password)VALUES ('jaspreet', '709466');";
   
   if ($conn->multi_query($sql) === TRUE) {

    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 

?>