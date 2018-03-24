<?php

require_once '../model/model.php';
require_once '../checkSession.php';

$obj = new GlassesListModel();
$obj->selectAll();
$list = $obj->GlassesList;

session_start();
$_SESSION['GlassesList'] = $list;	

header("Location: ../view/Home.php");
exit();



?>