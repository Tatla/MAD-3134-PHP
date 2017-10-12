<?php
function get_product_by_id($id){
	$product_info=array();
	
	//build JSON array
	switch ($id){
		case 1:
		$product_info=array("product_name"=>"hard drive","product_price"=>"120","product_quantity"=>"1");
		break;
		case 2:
		$product_info=array("product_name"=>"moniter","product_price"=>"120","product_quantity"=>"2");
		break;
	}
	return $product_info;
}
function get_product_list()
{
	$product_list=array(array("id"=>1,"name"=>"hard drive"),array("id"=>2,"name"=>"moniter"));
	return $product_list;
}
$possible_url=array("get_product_list","get_product");
$value="an error";
if(isset($_GET["action"])&&in_array($_GET["action"],$possible_url))
{
	switch($_GET["action"])
	{
		case "get_product_list":
		$value=get_product_list();
		break;
		case "get_product":
		if(isset($_GET["id"]))
	$value=get_product_by_id($_GET["id"]);
else
	$value="missing argument";
		break;
	}
}
exit(json_encode($value));
//http://localhost/phpprojects/api.php?action=get_product&id=1	
//http://localhost/phpprojects/api.php?action=get_product_list	
?>	
	
		