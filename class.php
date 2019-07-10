<?php
include('classConDB.php');

class manageDB{
		private $conDB;
		public function ManageDB(){
			$con= new ConDB();
			$con->connect();
			$this->conDB = $con->conn;
		}
		
		

	

	

	public function insertBook($cid,$bname,$amount,$price){

		

		$sql = "insert into book (category_id,book_name,amount,price) values ($cid,'$bname',$amount,$price);";
		
		$query = $this->conDB->query($sql);
			

			if($query === true)
	{
		echo "<script>";
		echo "alert(\"Add Successful\");"; 
		
		echo "</script>";
		header("location:index.php");
	}
	else
	{
		echo "<script>";
		echo "alert(\" Add ล้มเหลว\");"; 
		echo "window.history.back()";
		echo "</script>";
	}
	$this->conDB->close();
}
}

	
?>