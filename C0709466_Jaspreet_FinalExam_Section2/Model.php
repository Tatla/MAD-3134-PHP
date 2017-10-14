<?php

include_once("Student.php");

class Model {
	public function getList()
	{
           
            return array(
		"Jaspreet" => new Student("Jaspreet", "Cestar College", "MADT"),
		"Prabh" => new Student("Prabh", "Cester College", "MADT"),
		"Kinder" => new Student("Kinder", "Cester College", "MADT")
		);
	}
	
	public function getDetail($name)
	{
           
            $allStudents = $this->getList();
            return $allStudents[$name];
	}
	
	
}

?>