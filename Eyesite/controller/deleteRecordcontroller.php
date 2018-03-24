<?php

require_once '../model/model.php';
session_start();

$username = $_SESSION['username'];


$obj = new User();
$obj->delete("username = $username");

destroy_user
header("Location: ../views/Home.php?message= We're sorry to see you go.");
exit();

function destroy_user()
{
	$_SESSION = array();
	setCookie(session_name(), '', time() - 2592000, '/');
	session_destroy();
}


?>