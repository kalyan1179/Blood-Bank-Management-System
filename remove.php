<?php
require 'connect.inc.php';
if(isset($_POST['submit'])){
	$v = $_POST['num'];
	mysqli_query($conn , "DELETE FROM `bb` WHERE `bb_id`='$v'");
	?>
	<script type="text/javascript">window.location.href="admin.php"</script>
	<?php
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>REMOVE</title>
	<style type="text/css">
		.x{
			font-size: 30px;margin-left: 450px;  
		}
		body{
			background:green;
		}
	</style>
</head>
<body>
	<h1 align="center">Enter ID Number to Remove Blood Bank</h1>
	<pre>  

	</pre>
	<form action="" method="POST">
		<label class="x">ID NO: </label>
		<input style="font-size: 30px;background: violet;" type="number" name="num"><pre> </pre>
			<input style="margin-top:0px; font-size:28px;
			margin-left: 550px;height: 70px;width: 300px; background: pink;" type="submit" name="submit" value="Submit">
	</form>
</body>
</html>