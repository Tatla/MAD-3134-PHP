<?php
include_once("Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function invoke()
	{
		if (!isset($_GET['book']))
		{
			
			$students = $this->model->getList();
			include 'list.php';
		}
		else
		{
			
			$student = $this->model->getDetail($_GET['student']);
			include 'detail.php';
		}
	}
}

?>