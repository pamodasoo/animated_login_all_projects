<?php
	
	$link=mysqli_connect("localhost","root","","labtest");
	$sql = "SELECT id,name FROM table1";	
	$result = mysqli_query($link, $sql);
	

	{
?>
	
	<form action="Doctor_payroll.php" method="POST">
		<select name="doctor">
		<?php while($row = mysqli_fetch_assoc($result)) {?>	
			<option value=<?= $row['id'] ?> ><?= $row['name'] ?> </option>
		<?php }} ?>	
		</select>
		<input type="submit" value="Select" name="select">
	</form>