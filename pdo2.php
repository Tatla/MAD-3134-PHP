<html>
<body>
<?php
include 'pdo.php';

try{
	$dbConnect = new conection();
	$conn=$dbConnect->Open();
	if($conn){
		echo'connected';
		
		//display data
		$sql="select * from book ";
		$re=$conn->query($sql);
		foreach($conn->query($sql) as $row){
			echo $row['ISBN']."<br>";
				echo $row['Title']."<br>";
					echo $row['Cost']."<br>";
		}
	}
	else{
		echo $conn;
	}
}
catch(PDOException $ex){
	echo $ex->getMessage();
}
?>
</body>
</html>