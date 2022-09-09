<?php 
$con = mysqli_connect("localhost","root","","DIGIFOX");
if ($con) {
	$sql = "DELETE FROM `todo` WHERE 1";
	if (mysqli_query($con, $sql)) {
		?>
	<script type="text/javascript">
		alert("TO-DO List Reset");
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