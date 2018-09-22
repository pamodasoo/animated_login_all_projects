
<?php
include("header.php");
include("library.php");
?>
<!DOCTYPE html>
<html>
<head>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/mdb.min.css" rel="stylesheet">
	<body style="background-color: #F0F0F0;"></body>
	<style type="text/css">
		
		#table1 {
    margin-left: auto;
    margin-right: auto;
    font-family: Trebuchet MS;
    border-collapse: collapse;
    width: 50%;
}

		#table1 td, #table1 th {
    border: 1px solid;
    padding: 8px;
    color: white;
    text-align: center;
}


		#table1 tr {background-color: black;}

	#table1 th {
    padding-top: 12px;
    padding-bottom: 12px;
  
    background-color: #00e673;
    color: black;}
	</style>
</head>
<br><br>
<form method="POST" action="viewuser.php">
	<div class="container bg-sm">
	Enter User ID to Delete:
	<input type="number" name="id"><br>
	
	<button type="submit" name="duser" class="btn-dark btn-md">Delete User</button>
	
</form>

<body>

</body>
</html>

	
<?php


if (isset($_POST['logout'])){
    session_destroy();
    header('index.php');
}








if (isset($_POST['duser'])) {
	$id=($_POST['id']);
	$query4= "DELETE  FROM users WHERE id=$id;";
	mysqli_query($connection,$query4);
}




$query= "SELECT * FROM users";
$result = mysqli_query($connection, $query);

$qq = mysqli_num_rows($result);

if ($qq > 0 ){
	echo "<table id='table1'>
			<tr>
				<th>ID</th>
				<th>Email</th>
				<th>Type</th>
				
			</tr>";
	while ($row = mysqli_fetch_assoc($result)){
		$id=$row['id'];
		$email=$row['email'];
		$type=$row['type'];
		

		echo "<tr>
				<td>".$id."</td>
				<td>".$email."</td>
				<td>".$type."</td>
				
			</tr>";
	}	
	echo "</table>";
}

mysqli_close($connection);

?>

<?php




?>

