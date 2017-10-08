   
    
<?php    
    
include "insertnew.php"; 

?>

<html>
<head>
<meta charset="UTF-8">
<title>
Home Page
</title>
	<link rel="stylesheet" href="login.css" />
	<style>
	form{border: 2px solid black;margin-left:300px;width:50%;background-color:white;padding:20px;margin-top:20px;}
	body{background-color:skyblue;}
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
$errName="";
$Name="";
$errAddress="";
$Address="";
$errEmail="";
$Email="";
$errLink="";
$Link="";


if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if(isset ($_POST["Name"])){
  if (!preg_match("/^[a-zA-Z ]*$/",$_POST["Name"])) {
  $errName = "Only letters and white space allowed"; 
   }
    else{
		$Name=$_POST["Name"];
	}
	}
	if(empty ($_POST["Name"])){
		$errName="Please enter name";
	}
	
	if(isset ($_POST["Address"])){
		$Address=$_POST["Address"];
	}
	if(empty ($_POST["Address"])){
		$errAddress="Please enter address";
	}
	
	
	if(isset ($_POST["Email"])){
		
if (!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
  $errEmail = "Invalid Email format"; 
}
	else{	
		$Email=$_POST["Email"];
	}
	}
	if(empty ($_POST["Email"])){
		$errEmail="Please enter Email Address";
	}
	
		if(isset ($_POST["Link"])){
		    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST["Link"])) {
      $errLink = "Invalid URL"; 
    }
		
		else{
			$Link=$_POST["Link"];
	}
	}
	
	if(empty ($_POST["Link"])){
		$errLink="Please enter Website Link";
	}
}
?>
<form action="" method="post">

<fieldset>
    <legend> <b>Employee Information</b></legend>
	<p>
        <label for="Employee_ID">Employee_ID:</label>
        <input type="text" name="Employee_ID" id="Employee_ID" >
		
    </p>
    <p>
        <label for="Name">Name:</label>
        <input type="text" name="Name" id="Name" value="<?php echo htmlspecialchars($Name);?>">
		 <span><?php echo $errName;?></span><br>
    </p>
    <p>
      
        <label for="Gender">Gender:</label>
  <input type="text" name="Gender" id="Gender" value="F" > <br>

 
    </p>
	 <p>
        <label for="Birth_Date">Birth_Date:</label>
        <input type="date" name="Birth_Date" id="Birth_Date">
    </p>
    <p>
        <label for="Address">Address:</label>
        <input type="text" name="Address" id="Address" value="<?php echo htmlspecialchars($Address);?>">
		  <span><?php echo $errAddress;?></span><br>
    </p>
	 <p>
        <label for="City">City:</label>
        <input type="text" name="City" id="City">
    </p>
    <p>
        <label for="Province">Province:</label>
        <input type="text" name="Province" id="Province">
    </p>
	 <p>
        <label for="Postal_Code">Postal_Code:</label>
        <input type="text" name="Postal_Code" id="Postal_Code">
    </p>
    <p>
        <label for="Email">Email:</label>
        <input type="text" name="Email" id="Email" value="<?php echo htmlspecialchars($Email);?>" >
		 <span><?php echo $errEmail;?></span><br>
    </p>
	 <p>
        <label for="Website_Link">Website_Link:</label>
        <input type="text" name="Website_Link" id="Website_Link" value="<?php echo htmlspecialchars($Link);?>">
		 <span><?php echo $errLink;?></span><br>
    </p>
    <p>
        <label for="Joining_Date">Joining_Date:</label>
        <input type="date" name="Joining_Date" id="Joining_Date">
    </p>
   <p>
        <label for="Annual_Basic_Pay">Annual_Basic_Pay:</label>
        <input type="text" name="Annual_Basic_Pay" id="Annual_Basic_Pay">
    </p>
    <input type="submit" value="Add Record" name="submit">
	<input type="reset" value="Clear All">
	</fieldset> 
</form>



</body>
</html>