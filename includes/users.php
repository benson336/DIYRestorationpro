<?php 
Class Users {

private $conn;
private $db_table = "users";

public $username;
public $password;
public $email;
public $phone;
public $id;

public function __construct($db){
	$this->conn = $db;
}

public function create(){
	$sql = "INSERT INTO " . $this->db_table . " (username, password, email, phone) VALUES (:username, :password, :email, :phone)" ;
	$result = $this->conn->prepare($sql);
	$result->execute(['username' => $this->username, 'password' => $this->password, 'email' => $this->email, 'phone' => $this->phone]);
}

public function read(){
	$sql = "SELECT * FROM " . $this->db_table;
	$result = $this->conn->prepare($sql);
	$result->execute();
	while($row = $result->fetch()){?>
	<tr>
		<td><?php echo $row['username'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['phone'];?></td>
		<td><p><a href="edit.php?id=<?php echo $row['id'];?>">EDIT</a></p></td>
		<td><p><a href="delete.php?id=<?php echo $row['id'];?>">DELETE</a></p></td>
	</tr>
	<?php } 
	?><?php
}

public function update(){
	$sql = "UPDATE " . $this->db_table . " SET username = :username, email = :email, phone = :phone WHERE id= :id LIMIT 1";
	$result = $this->conn->prepare($sql);
	$result->execute(['username' => $this->username, 'email' => $this->email, 'phone' => $this->phone, 'id' => $this->id]);
	header("Location: ./member.php");
}

public function delete(){
	$sql = "DELETE FROM " . $this->db_table . " WHERE id= :id";
	$result = $this->conn->prepare($sql);
	$result->execute(['id' => $this->id]);
	header("Location: ./member.php");
}


public function verify_user($username, $password){
	$sql = "SELECT * FROM " . $this->db_table . " WHERE username = :username LIMIT 1";
	$result = $this->conn->prepare($sql);
	$result->execute(['username' => $username]);
	
	while($rows = $result->fetch()){
		$hashPassword = $rows['password'];
		$checkPassword = password_verify($password, $hashPassword);
		if($checkPassword){
			session_start();
			$_SESSION['userid'] = $rows['id'];
			header("Location: ./admin.php");
			exit();
		} else {
			$login_error = 'Please retry';
			//header("Location: ./login.php");
			//exit();
		}
	}
}

public function countUser(){
	$sql = "SELECT COUNT(id) as countUser FROM " . $this->db_table;
	$result = $this->conn->prepare($sql);
	$result->execute();
	while($row = $result->fetch()){
		echo $row['countUser'];
	}
}
}


?>