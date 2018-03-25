<?php

require_once '..\util\dbinfo.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

class GlassesModel{
	public $product_id, $frame, $size, $price, $gender, $img;
	
	function __construct($product_id, $frame, $size, $price, $gender, $img){
		$this->product_id=$product_id;
		$this->frame=$frame;
		$this->size=$size;
		$this->price=$price;
		$this->gender=$gender;
		$this->img=$img;
	}		
	
	function insert(){
		global $conn;
		$product_id = $this->product_id;
		$frame = $this->frame;
		$size = $this->size;
		$price = $this->price;
		$gender = $this->gender;
		$img = $this->img;
		
		$query = "insert into glasses (product_id, frame, size, price, gender, img) 
			values ('$product_id', '$frame', '$size', '$price', '$gender', '$img') ";
		$result=$conn->query($query);
		if(!$result) die ($conn->error);
	}
	
}

class GlassesListModel{
	public $GlassesList = Array();
		
	function selectAll(){
		global $GlassesList, $conn;
		
		$query = "Select * from glasses";
		$result=$conn->query($query);
		if(!$result) die ($conn->error);

		$rows=$result->num_rows;
		for($j=0; $j<$rows; $j++) {
			$result->data_seek($j);
			$row=$result->fetch_array(MYSQLI_NUM);
			$glasses = new GlassesModel($row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);
			$this->GlassesList[] = $glasses;
		}
	}
	
}

class User
{
    public $forename, $surname, $username, $password;
    public function __construct($forename, $surname, $username, $password, $role)
    {
        $this->forename = $forename;
        $this->surname = $surname;
        $this->username = $username;
        $this->password = $password;
    }
    public function insert()
    {
        global $conn;
        $forename = $this->forename;
        $surname = $this->surname;
        $username = $this->username;
        $password = $this->password;
        $query = "insert into users (forename, surname, username, password)
			values (NULL, '$forename', '$surname', '$username' '$password') ";
        $result = $conn->query($query);
        if (!$result) {
            die(
                "<div class='flash-message' style='position: relative;'>$conn->error</div>"
            );
        }
	}
	public function update($forename, $surname, $username, $password, $role)
	{
		global $conn;
		$query = "UPDATE" 'users' SET 'forename' = '$forename', 'surname' = '$surname', 'username' = '$username', 'password' = '$password'

		$result = $conn->query($query);
		if (!$result) {
			die("<div class='flash message' style 'position: relative;'>$conn->error</div>");
}
	}
	public function delete($where)
	$query = "delete from users where $where";
	$result = $conn->query($query);
	if (!$result) {
		die("<div class='flash message' style 'position: relative;'>$conn->error</div>");
}
}
?>