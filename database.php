<?php
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
/* $sql = "CREATE DATABASE C0709466_Jaspreet";
if ($conn->query($sql) === TRUE) {
       echo "Database created successfully"; */
	   
	   //use database
$sql = "USE C0709466_Jaspreet";
if ($conn->query($sql) === TRUE){
	echo "Database changed successfully"; 

/*
	// sql to create tableS
$sql = "CREATE TABLE Employee_Master (
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
)";  */

if ($conn->query($sql) === TRUE) {
    echo "Table Employee_Master created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
}else {
    echo "Error creating database: " . $conn->error;
} 

// prepare and bind

$stmt = $conn->prepare("INSERT INTO Employee_Master (Name, Gender, Birth_Date, Address, City, Province, Postal_Code, Email, Website_Link, Joining_Date, Annual_Basic_Pay) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssssssssss", $Name, $Gender, $Birth_Date, $Address, $City, $Province, $Postal_Code, $Email, $Website_Link, $Joining_Date, $Annual_Basic_Pay);

// set parameters and execute
$Name = "Jaspreet kaur";
$Gender = "Female";
$Birth_Date = "4July1993";
$Address = "110 Wilkes";
$City = "Scarbrouogh";
$Province = "Ontario";
$Postal_Code = "M1B4L6";
$Email = "kaur@gmail.com";
$Website_Link = "www.example.com";
$Joining_Date = "12June2015";
$Annual_Basic_Pay = "$24000";
$stmt->execute();

$Name = "Kulwinder Kaur";
$Gender = "Female";
$Birth_Date = "12Dec1992";
$Address = "41 AppleField";
$City = "Brampton";
$Province = "Ontario";
$Postal_Code = "M2B6L8";
$Email = "kulkaur@gmail.com";
$Website_Link = "www.kulwinder.com";
$Joining_Date = "4Nov1994";
$Annual_Basic_Pay = "$26000";
$stmt->execute();

$Name = "Prabh";
$Gender = "Female";
$Birth_Date = "3July1992";
$Address = "16 Ice Field";
$City = "Brampton";
$Province = "Ontario";
$Postal_Code = "L2M3B3";
$Email = "param@yahoo.com";
$Website_Link = "www.param.com";
$Joining_Date = "4Sept1990";
$Annual_Basic_Pay = "$30000";
$stmt->execute();




echo "New records created successfully";

$stmt->close();

$conn->close();
?>