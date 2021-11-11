<?php 
	
	require_once('../model/productssModel.php');
	$id = $_REQUEST['id'];
	$products = getproductsById($id);
	//print_r($products);
?>

<html>
<head>
	<title> Search products</title>
</head>
<body>
	<center>
		<a href="home.php">Back</a>|
		<a href="../controller/logout.php">Logout</a>
	</center>
	<form method="post" action="../controller/updateproducts.php">
		<fieldset>
			<legend>Edit New</legend>
			<table>
            <tr>
					
					<td><input type="text" name="name" value="<?=$products['name']?>"></td>
                    <td><button>Search by Name</button> </td>
				</tr>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name" value="<?=$products['name']?>"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="text" name="buying" value="<?=$products['buying']?>"></td>
				</tr>
				<tr>
					<td>email:</td>
					<td><input type="text" name="selling" value="<?=$products['selling']?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$id?>"> </td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>