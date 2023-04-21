<?php

class Database{

	private $connection;
	function _construct()
	{
		$this->connect_db();
	}
	public function connect_db(){

		$this->connection = mysqli_connect('localhost', 'root','','olx');

		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

		if(mysqli_connect_error()){

			die('Database Connection Failed'. mysqli_connect_error() . mysqli_connect_errno());
		}

	}


	public function sanitize($var)
	{
		$return = mysqli_real_escape_string($this->connection, $var);
		return $return;
	}

	public function read($id=null){
		$sql="SELECT * FROM `products`";
		if ($id) {
			$sql.="WHERE id=$id ";
		}
		$res = mysqli_query($this->connection, $sql);
		return $res;
	}
		public function read1($id=null){
		$sql="SELECT * FROM `products`  LIMIT 4 ";
		
		$res = mysqli_query($this->connection, $sql);
		return $res;
	}
		public function read2($id=null){
		$sql="SELECT * FROM `products`  LIMIT 4, 4 ";
		
		$res = mysqli_query($this->connection, $sql);
		return $res;
	}
		public function read3($id=null){
		$sql="SELECT * FROM `products`  LIMIT 8, 8 ";
		
		$res = mysqli_query($this->connection, $sql);
		return $res;
	}
		


	public function insert($category,$title, $description, $brand, $condition, $price, $filename, $filename2, $filename3, $filename4, $filename5, $location, $username, $phone){
		 $sql = "INSERT  INTO products (category, title, description, brand, conditions, price, image1, image2, image3, image4, image5, location, username, phone) VALUES ('$category','$title', '$description', '$brand', '$condition', '$price', '$filename', '$filename2', '$filename3', '$filename4', '$filename5', '$location', '$username', '$phone')";

    $result=mysqli_query($this->connection, $sql);

    if($result){
        return true;
        // header('location: admin.php');
    }
    else{
        die("err".mysqli_error($this->connection));
			return false;
    }
}

	

	
}

$database = new Database();
$database -> connect_db();

?>