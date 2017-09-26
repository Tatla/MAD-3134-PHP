<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<h1>"hello World"</h1>
<?php

echo "This is PHP page";
echo "<br>";
$x=5;
$y=6;
$z=7;
function test(){
	global $x,$y;
	$GLOBALS['z'];
echo $x . "<br>" . $y . "<br>";
 static $i = 0;
 echo $i;
    $i++;
	print "hello" . "hii";
	define("WELCOME", "Welcome to MADT", true);
echo welcome;
}
test();
echo $z;

function test1(){
$myarray = array("Jass"=>"A", "Prabh"=>"A");
foreach($myarray as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
}
}
test1();


?>
</body>
</html>