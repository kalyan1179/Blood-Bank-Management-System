<?php
require 'connect.inc.php';
session_start();  
$n = $_SESSION['sname'];
$bg = $_SESSION['b'];

// echo $bg;
$result = mysqli_query($conn,"SELECT `b_id` FROM `blood` WHERE `b_name` = '$bg'");
$data = mysqli_fetch_assoc($result);
 // echo $data['b_id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>SEARCH</title>
		<style type="text/css">
		.x{
			background-color: rgb(195,0,0);
			height: 75px;
			width: 100%;
            margin: 0;
		}
		.v{
			float:right;margin-top: 20px;margin-right: 10px;

		}
		.l{
			float:right;height: 600px;width: 400px;
		}
		a{
			text-decoration: none;
			color: black;
		}
		.p{
			height: 600px;width: 800px;
			background: url(RecipientBG.png) left top;background-repeat: no-repeat;
		}
		ul{
 			list-style-type: circle;
		}
		.ul a:hover
		{
			text-decoration: underline;
		}
		table
		{
			width: 100%;
		}
		tr:nth-child(even) {background-color: #f2f2f2;width: 100%;background: transparent;}
		tr:nth-child(odd) {background-color: lightblue;width: 100%;background:transparent;
		}
		.trx{overflow-y:scroll;}
		.th
		{
			text-decoration: underline;
			font-weight: bold;
			text-align: center;font-size: 150%;
		}
		td{
			font-size: 23px;text-align: center;height: 70px;background: transparent;font-size: 110%;
		}
	</style>
</head>
<body>
	<div class="x">
	<div class="v" style="font-size: 30px;"><a href="profile.php"><?php echo $n;?></a></div>
	<!-- <div class="v" style="font-size: 30px;"><?php echo $diff." ".$n;?></div> -->
	<!-- <div class="v" style="font-size: 30px;"><?php echo $n1;?></div> -->

	<!-- <button class="v" >Login</button> -->
	<div class="v" style="font-size: 60px;margin-top: 0px;margin-right: 10px">|</div>
	<div class="v" style="font-size: 30px;"><a href="logout.php">Log Out</a></div>
	<div class="v" style="font-size: 60px;margin-top: 0px;margin-right: 10px">|</div>
	<div class="v" style="font-size: 30px;"><a href="order.php">Request Blood</a></div>
	<div class="v" style="font-size: 60px;margin-top: 0;margin-right: 10px">|</div>
	<div class="v" style="font-size: 30px;"><a href="donate.php">Donate Blood</a></div>
	 <div style="font-size: 30px;padding-top: 20px;font-weight: bold;padding-left: 10px"><a href="home.php">BLOOD FOR NEEDY</a></div> 
	 <h1 align="center" style="font-size: 45px; ">AVAILABILITY</h1>
	 <div style="border: 1px solid black;background:url(Profile5.jpg);background-size: cover;height: 500px;margin-top: 0px;  font-weight: bold;font-size: 150%;overflow-y: scroll;width: 100%; ">
	 <table style="height: 100%;">
	 	<tr>
			 		<td class="th">Blood Bank Name</td>
			 		<td  class="th">Address</td>
			 		<td class="th">City</td> 
			 		<td  class="th">Phone Number</td>
	 	</tr>
	 	<?php
	 	$x = mysqli_query($conn,"SELECT `sbb_id` FROM `stored` WHERE `sb_id`=$data[b_id]");
	 	$count = mysqli_num_rows(mysqli_query($conn,"SELECT `sbb_id` FROM `stored` WHERE `sb_id`=$data[b_id]"));
	 	while($count--){
	 	$re = mysqli_fetch_assoc($x);
		$r =mysqli_query($conn,"SELECT * FROM `bb` WHERE bb_id = $re[sbb_id]") ; 
 
	 		while($d=mysqli_fetch_assoc($r)) {
	 	?>
	 	<tr>
	 		<td><?php echo $d['bb_name']; ?></td>
	 		<td><?php echo $d['bb_address']; ?></td>
	 		<td><?php echo $d['bb_city']; ?></td>
	 		<td><?php echo $d['bb_phno']; ?></td>

	 	</tr>
	 	<?php
	 		}
	 	}
	 	?>
	 </table>
	 </div>
</body>
</html>