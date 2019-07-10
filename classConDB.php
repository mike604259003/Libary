<?php
class ConDB{
	private $host,$user,$pass,$db;
	public $conn;
	
	public function ConDB(){
		$this->host="localhost";
		$this->user="root";
		$this->pass="";
		$this->db="bookjunior";
		
		}
		
	public function connect(){
		$this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
		mysqli_set_charset($this->conn, "utf8");
		if($this->conn->connect_error){
			die("Connection Failed: ". $this->conn->connect_error);
			}else{
			//echo "Connected Successfully";
			}
		}
	
	
	}
	//use
	//$con= new ConDB();
	//$con->connect();
	//$con->conn;
?>