
<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<?php
$content=file_get_contents("ex.json");

$json =json_decode($content,true);

echo "<pre>" . print_r($json,true)."</pre>";
echo $json['address']['city']."<br>";
echo $json['phno'][0]['type'].":".$json['phno'][0]['number'];
	
?>

</body>
</html>