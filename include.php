<html>
<head>
<title>
Home Page
</title>
</head>
<body>
<?php

include '3-Oct.php';

$s1 = new phpclass;
$sData =[];

$s1->setData(101,"pn");
$sData=$s1->getData();

foreach ($sData as $i){
	echo"$i <br>";
}

for($i=0;$i<count($sData);$i++){
	echo $sData[$i]."";
}


?>

</body>
</html>