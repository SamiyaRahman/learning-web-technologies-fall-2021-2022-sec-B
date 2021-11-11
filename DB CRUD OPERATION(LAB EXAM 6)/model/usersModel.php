<?php 
	require_once('db.php');

	
	function insertUser($products){
		$con = getConnection();
		$sql = "insert into products values ('', '{$products['name']}', '{$products['buying']}',  '{$products['selling']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllproducts(){
		$con = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getUserById($id){
		$con = getConnection();
		$sql = "select * from products where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editUser($products){
		$con = getConnection();
		$sql = "update products set username='{$products['name']}', buying='{$products['buying']}', selling='{$user['selling']}' where id={$products['id']}";
		
		//echo $sql;

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$con = getConnection();
		$sql = "delete products where id={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>