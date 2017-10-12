<?php
include_once("Book.php");
class Model{
	public function getBookList(){
		return array(
		"jungle Book" =>new Book("jungle Book","R.Kipling","A classic Book"),
		"Moonwalker"=> new Book("Moonwalker","j.Walker","Sciene book"),
		"PHP for Dummies"=>new Book("PHP for Dummies","Some smart guy","php"));
		
	}
	public function getBook($title)
	{
		$allBooks=$this->getBookList();
		return $allBooks[$title];
	}
}
?>