<?php
include_once("../models/Product.php");



if(isset($_POST["action"]))
{
	echo "Llegaron los valores";
}
else
{
	$products = Product::get();
	
	$products = json_encode($products);

	echo $products;

}
