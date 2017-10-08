
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

//var_dump($_POST);

if(isset($_POST['submit']))
  {
$Employee_ID = mysqli_real_escape_string($conn, $_POST['Employee_ID']);
$Name = mysqli_real_escape_string($conn, $_POST['Name']);
$Gender = mysqli_real_escape_string($conn, $_POST['Gender']);
$Birth_Date = mysqli_real_escape_string($conn, $_POST['Birth_Date']);
$Address = mysqli_real_escape_string($conn, $_POST['Address']);
$City = mysqli_real_escape_string($conn, $_POST['City']);
$Province = mysqli_real_escape_string($conn, $_POST['Province']);
$Postal_Code = mysqli_real_escape_string($conn, $_POST['Postal_Code']);
$Email = mysqli_real_escape_string($conn, $_POST['Email']);
$Website_Link = mysqli_real_escape_string($conn, $_POST['Website_Link']);
$Joining_Date = mysqli_real_escape_string($conn, $_POST['Joining_Date']);
$Annual_Basic_Pay = mysqli_real_escape_string($conn, $_POST['Annual_Basic_Pay']);
$query  = "INSERT INTO Employee_M( Employee_ID,Name, Gender, Birth_Date,Address,City,Province,Postal_Code,Email,Website_Link,Joining_Date,Annual_Basic_Pay) 
            VALUES ('$Employee_ID','$Name','$Gender','$Birth_Date','$Address','$City','$Province','$Postal_Code','$Email','$Website_Link','$Joining_Date','$Annual_Basic_Pay')";
		//$sql = mysql_query($query,$conn);
		$sql = $conn->query($query);
		
	//echo "$query";
			
			
			
	//echo $query;
		
    if($sql)
    {
      echo "Record Added Successfully";
        //<script>
           // alert('Employee had been successfully added.');
            
        //</script>
      
    }

    else
    {
       echo "error";
       // <script>
           // alert('Invalid.');
            
       // </script>
       
    }
  }
?>