<?php

require_once '..\util\dbinfo.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

class ProductModel{
	public $product_id,$name,$price,$img;
	
	function __construct($product_id,$name,$price,$img){
		$this->product_id=$product_id;
		$this->name=$name;
		$this->price=$price;
		$this->img=$img;
	}		
	
	function insert(){
		global $conn;
		$product_id = $this->product_id;
		$name = $this->name;
		$price = $this->price;
		$img = $this->img;
		
		$query = "insert into product (product_id, name, price, img) 
			values ('$product_id','$name','$price','$img') ";
		$result=$conn->query($query);
		if(!$result) die ($conn->error);
	}
	
}

class ProductListModel{
	public $ProductList = Array();
		
	function selectAll(){
		global $ProductList, $conn;
		
		$query = "Select * from product";
		$result=$conn->query($query);
		if(!$result) die ($conn->error);

		$rows=$result->num_rows;
		for($j=0; $j<$rows; $j++) {
			$result->data_seek($j);
			$row=$result->fetch_array(MYSQLI_NUM);
			$product = new ProductModel($row[0],$row[1],$row[2],$row[3]);
			$this->ProductList[] = $product;
		}
	}
	
}
?>