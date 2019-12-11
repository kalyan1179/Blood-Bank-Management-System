<?php
require 'connect.inc.php';

if(isset($_POST['submit'])){
	$n = $_POST['name'];
	$a = $_POST['address'];
	$c = $_POST['city'];
	$nu = $_POST['num'];
$q = "INSERT INTO `bb`( `bb_name`, `bb_address`, `bb_phno`, `bb_city`) VALUES ('$n','$a','$c','$nu')";
mysqli_query($conn,$q);//echo "tdgh";
?>
<script type="text/javascript">window.location.href="admin.php"</script>
<?php
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD</title>
	<style type="text/css">
		.x{
			font-size: 40px;margin-left: 450px;  
		}
		label{
			font-size: 30px;
		}
		body{
			background:rgb(0,200,200);
		}
	</style>
</head>
<body>
	<h1 style="font-size: 40px;" align="center">Enter Details to Add Blood Bank</h1>
	<form style="margin-left: 430px;text-align: left;" action="" method="POST">
		<label>NAME:</label>
		<input style="font-size: 30px;background: violet;margin-left: 60px;" type="text" name="name" required>
		<br><br>
		<label>ADDRESS:</label>
		<input style="font-size: 30px;background: violet;margin-left: 12px;" type="text" name="address" required>
		<br><br>
		<label>CITY:</label>
		<input style="font-size: 30px;background: violet;margin-left: 82px;" type="text" name="city" required>
		<br><br>
		<label>PHONE NO:</label>
		<input style="font-size: 30px;background: violet;margin-left: 0px;" type="number" name="num" required>
		<br><br>
		<input style="margin-top:50px; font-size:28px;margin-left: 100px;height: 70px;width: 300px; background: pink;" type="submit" name="submit" value="Submit">
	</form>
</body>
</html>