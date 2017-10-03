<?php
	echo "<h1>Date Format</h1>";
echo "Today is " . date("Y/m/d") . "<br>";

echo "Today is " . date("l");

	echo "<h1>Class</h1>";

class phpclass{
	var $sid;
	var $sname;
	function _construct()
	{
		echo "<h1>hii</h1>";
	}
	function setData($id,$name)
	{
		$this->sid=$id;
		$this->sname=$name;
		
	}
	function getData()
	{
		echo "<br>" .$this->sid;
		echo "<br>" .$this->sname;
		 return array($this->sid, $this->sname);
	}
	function _destruct()
	{
		echo "<h1>byee</h1>";
	}
	}
	/*
	$s1 = new phpclass;
	$s1->sid=100;
	$s1->sname="jass";
	
	echo "<br>".$s1->sid;
	echo "<br>".$s1->sname;
	echo "<br>";
	
	$s1->setData(200,"Test Name");
	$s1->getData(); */
	
	
	echo "<h1>Inheritance</h1>";	
	
//Employee Class
	
class Employee
{
	var $Eid;
	var $Ename;
	function _construct()
	{
		echo "<h1>Employee Object</h1>";
	}
	function setData($id,$name)
	{
		$this->Eid=$id;
		$this->Ename=$name;
		
	}
	function getData()
	{
		echo "<br>" .$this->Eid;
		echo "<br>" .$this->Ename;
		// return array($this->Eid, $this->Ename);
	}
function _destruct()
	{
		echo "<h1>byee</h1>";
	}
	}
	
//Salary (Child Class)

class Salary extends Employee
{
var $basicPay;	
function _construct($id,$name,$bpay)
	{
		Employee::Employee($id,$name);
		echo "<h1>Employee Salary Object</h1>";
	}
	function setSalary($bpay)
	{
		$this->basicPay=$bpay;
		//$this->Ename=$name;
		
	}
	function getSalary()
	{
		echo "<br>" .$this->basicPay;
		//echo "<br>" .$this->Ename;
		// return array($this->Eid, $this->Ename);
	}
function _destruct()
	{
		echo "<h1>byee</h1>";
	}
}	
	
	
	$E1 = new Salary(101,"jaspreet",24000);
//	$E1->Eid=101;
//	$E1->Ename="jaspreet";
//	$E1->basicPay=240000;
	
	echo "<br>".$E1->Eid;
	echo "<br>".$E1->Ename;
	echo "<br>".$E1->basicPay;
	echo "<br>"; 

	
	$E1->setData(200,"Test Name");
	$E1->getData();
	$E1->setSalary(30000);
	$E1->getSalary();
	
	
?>