<?php
include 'finaldatabase.php'; 
?> 
 

<html>
<head>

<style>
body{border:2px solid skyblue;}
input[type=button], input[type=submit], input[type=text] ,input[type=password]{
    background-color:skyblue;
     border: 2px solid white;
	 border-radius: 15px;
    color: black;
    padding: 10px;
    font-size:20px;
	text-align:center;
    margin: 4px 2px;
    cursor: pointer;
	font-weight: bold;
	
}
</style>
</head>

<body>

<?php
 
session_start(); 
if(isset($_POST['username']) and isset($_POST['password']))  { 
	$username = $_POST['username']; 
	$password = $_POST['password']; 
	

$_SESSION['username']=$username;

$link = mysqli_connect($servername, $user, $pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");
      
          $sql_query = "Select userName From login Where userName = '$username' AND Password = '$password'";  
           
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));  
			if($result == false)
				{
				echo 'The query failed.';
				exit();
			}
			
			if(mysqli_num_rows($result) == 1){ 
			
				header('Location: index.php');
			   
			}else{ 
			$err = 'Incorrect username or password' ; 
			} 
			
			echo "$err";
    } 
	
?>	

<form action="" method="post" >
<h1>Login</h1>
<table>
<tr>
    <td><label>Username:</label></td>
    <td><input type="text" name="username" required/></td>
</tr>
<tr>
    <td><label>Password:</label></td>
    <td><input type="password" name="password" required/></td>
</tr>
</table>

<input type="Submit" value="Login"/>
</form>



</body>
</html>