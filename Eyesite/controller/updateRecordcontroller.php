<?php
if (isset($_POST['username'])) {
    require_once '../model/model.php';
    session_start();
    if (empty($_POST['password'])) {
        $forename = $_POST['first_name'];
        $surname = $_POST['last_name'];
        $username = mysql_entities_fix_string($conn, $_POST['username']);
        $username = $_SESSION['username'];
    
        $obj = new User();
        $user = $obj->select("username = '$username'");
        $password = $user['password'];
        $obj->update($forename, $surname, $username, $password, $role);
    
        $_SESSION['forename'] = $forename;
        $_SESSION['surname'] = $surname;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
    
        header("Location: ../views/My-account.php?message=Your information has been updated");
        exit();
    }
    $forename = $_POST['forename'];
    $surname = $_POST['surname'];
    $username = mysql_entities_fix_string($conn, $_POST['username']);
    $username = $_SESSION['username'];
    $salt1 = isset($_ENV['SALT1']) ? $_ENV['SALT1'] :'qm&h*';
    $salt2 = isset($_ENV['SALT2']) ? $_ENV['SALT2'] :'pg!@';
    $password = mysql_entities_fix_string($conn, $_POST['password']);
    $token = hash('ripemd128', "$salt1$password$salt2");
    $obj = new User();
    $obj->update('$forename', '$surname','$username', '$token');
    $_SESSION['forename'] = $forename;
    $_SESSION['surname'] = $surname;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("Location: ../views/My-account.php?message=Your information has been updated");
    exit();
}
function mysql_entities_fix_string($conn, $string){
	return htmlentities(mysql_fix_string($conn, $string));	
}
function mysql_fix_string($conn, $string){
	if(get_magic_quotes_gpc()) $string = stripslashes($string);
	return $conn->real_escape_string($string);
}
?>