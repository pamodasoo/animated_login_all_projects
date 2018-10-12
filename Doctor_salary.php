<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<body>
	<form id="Doctors salary Form" name="Doctor Salary" method="post" action="">
		<table width="313" height="252" border="1" cellpadding="20" cellspacing="20" align="center">
			<br><br>
			<tr>
				<td colspan="2" align="center"><b>Doctor's Salary Calculation</b></td>
			</tr>
			<tr>
				<td width="169">Doctor ID</td>
				<td width="128"><input type="text" name="docid" id="docid"></td>
			</tr>
			<tr>
				<td width="169">Doctor Name</td>
				<td width="128"><input type="text" name="empname" id="empname"></td>
			</tr>
			<tr>
				<td width="169">Number of Appoinments</td>
				<td width="128"><input type="text" name="appno" id="appno"></td>
			</tr>
			
			<tr>
				<td colspan="2"><input type="submit" name="submit" id="submit"></td>
	
			</tr>
			
		</table>
	</form>
</body>

</html>

<?php
		if(isset($_POST['submit']))
		{
			$appno = $_POST['appno'];

			if($appno > 1)
			{
				$salary = ($appno * 800) +10000 ;
			}
			
			else
			{
				$salary = 10000;
			}
			echo "<h2 align = 'center' > Salary for the month is Rs. " . $salary . "<h2>";

			 
		}


 
			
