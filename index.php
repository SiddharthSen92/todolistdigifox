<!DOCTYPE html>
<html>
<head>
	<title>To Do List</title>
</head>
<body>
	<table>
		<tr>
			<th>Sl No.</th>
			<th>Item</th>
		</tr>
		<?php 

		$con = mysqli_connect("localhost","root","","DIGIFOX");
		if ($con) {
			$query = "SELECT * FROM `todo` WHERE 1";
			$sql = mysqli_query($con, $query);
	//retrieve the records
			$num_rows = mysqli_num_rows($sql);
			if ($num_rows==0) {//if number of entries returned is zero
				echo "<tr><td>1</td><td>No Data</td></tr>";
			}else{
				while($row = mysqli_fetch_row($sql)){
					?>
					<tr>
						<td><?php echo $row[0]; ?></td>
						<td><?php echo $row[1]; ?></td>
					</tr>
					<?php
			}
		}
		}else{
			echo "Connection Error";
		}
		?>
	</table>
	<br/>
	<form action="insert.php" method="post">
		<label for="item">Add To-do Item</label>
		<input type="text" name="item" id="item" required>
		<input type="submit" name="submit" id="submit">		
	</form>

	<form action="deleteall.php" method="post">
		<input type="submit" name="submit" value="Delete All Items">
	</form>
</body>
</html>