<?php

require_once '../model/model.php';
require_once '../checkSession.php';

$obj = new ProductListModel();
$obj->selectAll();
$list = $obj->productList;

session_start();
$_SESSION['productList'] = $list;	

header("Location: ../view/view-product.php");
exit();



?>