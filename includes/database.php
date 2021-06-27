<?php
class Database {

private $host = 'localhost';
private $db_name = 'fullstack';
private $username = 'root';
private $password = '';
private $conn;

public function connect(){
	$this->conn = null;
	$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

	try{
		$this->conn = new PDO($dsn, $this->username, $this->password);
		$this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);//default fatch mode
		$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Connected successfully";
	} catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
	return $this->conn;

}


}
?>