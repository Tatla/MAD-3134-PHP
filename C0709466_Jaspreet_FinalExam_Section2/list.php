<html>
<head></head>

<body>

<table>
	<tr><td>Name</td><td>College</td><td>Course</td></tr>
	<?php 

		foreach ($students as $name => $student)
		{
			echo '<tr><td><a href="index.php?student='.$student->name.'">'.$student->name.'</a></td><td>'.$student->college.'</td><td>'.$student->course.'</td></tr>';
		}

	?>
</table>

</body>
</html>