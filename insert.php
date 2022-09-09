<?php 
$item=$_POST["item"];
$con = mysqli_connect("localhost","root","","DIGIFOX");
if ($con) {
	$sql = "INSERT INTO `todo` (`item`) VALUES ('$item')";
	if (mysqli_query($con, $sql)) {
		?>
	<script type="text/javascript">
		window.location.href = "index.php";
	</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert("Error Try Again");
			window.location.href = "index.php";
		</script>
		
		<?php
	}
}else{
	echo "Connection error";
}

?>