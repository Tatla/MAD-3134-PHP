<?php

class Student {
	public $name;
	public $college;
	public $course;
	
	public function __construct($name, $college, $course)  
    {  
        $this->name = $name;
	$this->college = $college;
	$this->course = $course;
    } 
}

?>