<?php 
	if(isset($_POST['select'])){
		$link=mysqli_connect("localhost","root","","labtest");
		$id = $_POST['doctor'];
		$sql = "SELECT * FROM table1 WHERE id=$id";	
		$result = mysqli_query($link, $sql);
		$row = mysqli_fetch_assoc($result);
		
	
	

?>


<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title> Doctors Payroll</title>
</head>
<br><br><br>
<body style= "background-image:"Desktop/download.jpg">
	<form id="Doctors salary Form" name="Doctor Salary" method="post" action="">
		<table width="313" height="252" border="1" cellpadding="20" cellspacing="20" align="center">
			<tr>
				<td colspan="2" align="center">Doctor's Salary Calculation</td>
			</tr>
			<tr>
				<td width="169">Doctor ID</td>
				<td width="128"><input type="text" name="docid" id="docid" value="<?= $row['id'] ?>" readonly></td>
			</tr>
			<tr>
				<td width="169">Doctor Name</td>
				<td width="128"><input type="text" name="empname" id="empname" value="<?= $row['name'] ?>" readonly></td>
			</tr>
			<tr>
				<td width="169">Number of Appoinments</td>
				<td width="128"><input type="text" name="appno" id="appno" value="<?= $row['ap'] ?>" readonly></td>
			</tr>
			
			<tr>
				<td colspan="2"><input type="submit" name="submit" id="submit"></td>
	
			</tr>
			
		</table>
	</form>
</body>

	<?php } ?>
	

</html>

<?php
		if(isset($_POST['submit']))
		{
			$appno = $_POST['appno'];

			if($appno > 1)
			{
				$salary = ($appno * 500) +8000 ;
			}
			
			else
			{
				$salary = 8000;
			}
			echo "<h2 align = 'center' > Salary for the month is Rs. " . $salary . "<h2>";


			 
		}
		
		?>



 