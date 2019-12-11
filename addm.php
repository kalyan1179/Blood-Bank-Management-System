<?php
require 'connect.inc.php';
session_start();
$qu="SELECT `bb_city` FROM `bb` ORDER BY bb_city";
$r=mysqli_query($conn,$qu);

$x = mysqli_fetch_assoc(mysqli_query($conn,"SELECT CURRENT_DATE AS C"));
$date = $x['C'];

if(isset($_POST['submit'])){
	$n = $_POST['name'];
	$e = $_POST['email'];
	$c = $_POST['city'];//echo $c;
	$nu = $_POST['num'];
	$p = $_POST['p'];
if(1  == mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `bb`,`manages` WHERE bb.bb_id=manages.mbb_id and `bb_city`='$c'"))){
	// echo $p;;
	?>
	<script type="text/javascript">
		alert("cannot add manager");
		window.location.href="admin.php";
	</script>
	<?php
}else{
$q1 = "INSERT INTO `manager`(`m_name`, `m_phno`, `m_email`, `m_password`) VALUES ('$n','$nu','$e','$p')";
mysqli_query($conn,$q1);

if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `manager` WHERE `m_email`='$e'"))==1){
	$da = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `manager` WHERE `m_email`='$e'"));
}

if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `bb` WHERE `bb_city`='$c'"))==1){
	$dat = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `bb` WHERE `bb_city`='$c'"));//echo "sjdhvc";
}
$q2 = "INSERT INTO `manages`(`mbb_id`, `mm_id`, `m_doj`) VALUES ('$dat[bb_id]','$da[m_id]','$date')";
mysqli_query($conn,$q2);
?>
<script type="text/javascript">window.location.href="admin.php"</script>
<?php
}}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD manager</title>
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
	<h1 style="font-size: 40px;" align="center">Enter Details to Add Manager</h1>
	<form style="margin-left: 430px;text-align: left;" action="" method="POST">
		<label>NAME:</label>
		<input style="font-size: 30px;background: violet;margin-left: 105px;" type="text" name="name" required>
		<br><br>
		<label>CITY(WORK):</label>
		<select style="font-size: 25px;background: violet;margin-left: 15px;width: 371px;" name="city" placeholder="Select city" required>
		<option>Select City</option>
		<?php
		while($data=mysqli_fetch_assoc($r)){
		?>
		<option><?php echo $data['bb_city']; ?></option>
		<?php
		}
		?>
		</select>
		<br><br>
		<label>PHONE NO:</label>
		<input style="font-size: 30px;background: violet;margin-left: 46px;" type="number" name="num" required>
		<br><br>
		<label>E-MAIL:</label>
		<input style="font-size: 30px;background: violet;margin-left: 90px;" type="text" name="email" required>
		<br><br>
		<label>PASSWORD:</label>
		<input style="font-size: 30px;background: violet;margin-left: 35px;" type="password" name="p" required>
		<br><br>
<!-- 		<label>BLOOD BANK:</label>
		<input style="font-size: 30px;background: violet;margin-left: 0px;" type="text" name="bb" required>
		<br><br> -->
		<input style="margin-top:50px; font-size:28px;margin-left: 100px;height: 70px;width: 300px; background: pink;" type="submit" name="submit" value="Submit">
	</form>
</body>
</html>