<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
$errName="";
$name="";
$errAddress="";
$address="";
$errEmail="";
$email="";
$errProfile="";
$profile="";
$errFreq="";
$rdo1Checked="";
$rdo2Checked="";
$rdo3Checked="";
$errNews="";
$news="";
$errTech="";
$tech= array();

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(isset ($_POST["name"])){
			
	
if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {
  $errName = "Only letters and white space allowed"; 
}
else{
		$name=$_POST["name"];
	}
	}
	if(empty ($_POST["name"])){
		$errName="Please enter name";
	}

	
	if(isset ($_POST["address"])){
		$address=$_POST["address"];
	}
	if(empty ($_POST["address"])){
		$errAddress="Please enter address";
	}

	
	if(isset ($_POST["email"])){
		
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  $errEmail = "Invalid email format"; 
}
	else{	
		$email=$_POST["email"];
	}
	}
	if(empty ($_POST["email"])){
		$errEmail="Please enter email";
	}
	
	
	if(isset ($_POST["profile"])){
		    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST["profile"])) {
      $errProfile = "Invalid URL"; 
    }
		
		else{
			$profile=$_POST["profile"];
	}
	}
	
	if(empty ($_POST["profile"])){
		$errProfile="Please enter profile";
	}
	
if(isset ($_POST["freq"])){
	if($_POST["freq"]=="Weekly"){
		$rdo1Checked="Checked";
	}
	else if($_POST["freq"]=="Monthly"){
		$rdo2Checked="Checked";
	}
	else if($_POST["freq"]=="Occasionally"){
		$rdo3Checked="Checked";
	}
}
else{
	$errFreq="Please select any one option";
}

if(isset ($_POST["tech"])){
	$tech=$_POST["tech"];
}
if(empty ($_POST["tech"])){
		$errTech="Please select one ";
	}
	
if(isset ($_POST["news"])){
		$profile=$_POST["profile"];
	}
	if(empty ($_POST["news"])){
		$errNews="Please select";
	}

	
}
	

?>

<h1>"Form"</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<label for="name">Name:</label><br>
 <input type="text" name="name" value="<?php echo htmlspecialchars($name);?>">
 <span><?php echo $errName;?></span><br>
 
<label for="address">Address:</label><br> 
 <textarea name="address" rows="5" cols="40" value="<?php echo htmlspecialchars($address);?>"></textarea>
  <span><?php echo $errAddress;?></span><br>
  
<label for="email">E-mail:</label><br> 
<input type="text" name="email" value="<?php echo htmlspecialchars($email);?>">
 <span><?php echo $errEmail;?></span><br>
 
<label for="profile">LinkedIn Profile:</label><br>
<input type="text" name="profile" value="<?php echo htmlspecialchars($profile);?>">
 <span><?php echo $errProfile;?></span><br>
 
<label for="list">Which tecnology you are interested in ?</label><br>
<select name="tech[]" size=4>
<?php 

$techList = array("PHP","Java","Android","iOS");
$cnt = count($techList);
for($i=0;$i<$cnt;$i++)
{
	echo '<option value=""' .$techList[$i] .'"';
	if (in_array($techList[$i],$tech)){
		echo "Selected";
	}
	echo '>' . $techList[$i] . '</option>';
}
?>

</select>
 <span><?php echo $errTech;?></span><br>
<label for="news">Would you like to subscribe our newsletter ?</label><br>
<input type="checkbox" name="news"  value="<?php echo htmlspecialchars($news);?>">
 <span><?php echo $errNews;?></span><br>
<label for="name">How frequent do you want to receieve the newsletters ?</label><br>
<input type="radio" name="freq" value="weekly" <?php echo htmlspecialchars($rdo1Checked);?>>Weekly<br>
<input type="radio" name="freq" value="monthly" <?php echo htmlspecialchars($rdo2Checked);?>>Monthly<br>
<input type="radio" name="freq" value="occasionally" <?php echo htmlspecialchars($rdo3Checked);?>>Occasionally
 <span><?php echo $errFreq;?></span><br>
<input type="submit">
</form>

</body>
</html>