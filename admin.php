<?php
session_start();error_reporting(0);
require 'connect.inc.php';
if(isset($_SESSION['sname'])){
$id=$_SESSION['id'];
$n=$_SESSION['sname'];
$query="SELECT * FROM `donate`,`bb` WHERE duser_id='$id' and bb.bb_id=donate.dbb_id";
$result=mysqli_query($conn,$query);
 
 if(isset($_POST['submit'])){
 	?>
 	<script type="text/javascript">window.location.href="add.php"</script>
 	<?php  
}

 if(isset($_POST['ssubmit'])){
 	?>
 	<script type="text/javascript">window.location.href="remove.php"</script>
 	<?php  
}

 if(isset($_POST['asubmit'])){
 	?>
 	<script type="text/javascript">window.location.href="addm.php"</script>
 	<?php  
}

 if(isset($_POST['rsubmit'])){
 	?>
 	<script type="text/javascript">window.location.href="removem.php"</script>
 	<?php  
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<style type="text/css">
		.x{
			background-color: rgb(195,0,0);
			height: 75px;
			widtd: 100%;
            margin: 0;
		}
		.v{
			float:right;margin-top: 20px;margin-right: 25px;
		}
		a{
			text-decoration: none;
			color: black;
		}
		.td
		{
			text-decoration: none;
			font-weight: bold;
			text-align: center;font-size: 110%;
		}
		td{
			font-size: 23px;text-align: center;height: 70px;background: transparent;font-size: 110%;
		}

	</style>
</head>
<body>
	<div class="x">
	<div class="v" style="font-size: 30px;"><a href="admin.php"><?php echo $n;?></a></div>
	<!-- <button class="v" >Login</button> -->
	<div class="v" style="font-size: 60px;margin-top: 0px;margin-right: 10px">|</div>
	<div class="v" style="font-size: 30px;"><a href="logout.php">Log Out</a></div>

	<!-- <div class="v" style="font-size: 60px;margin-top: 0px;margin-right: 10px">|</div> -->
	<div style="font-size: 30px;padding-top: 20px;font-weight: bold;padding-left: 10px"><a href="home.php">BLOOD FOR NEEDY</a></div>

	<!-- <div style="background-color: red;margin-left: 500px;font-size: 35px; margin-top: 30px;height: 55px;widtd: 270px;">Add a Blood Bank</div>
  -->
  	 	<form action="" method="POST">
	<input style="margin-top:50px; font-size:28px; float: right;margin-right: 100px;
			height: 70px;widtd: 350px; background: violet;" type="submit" name="rsubmit" value="REMOVE A MANAGER">
	</form>
 	<form action="" method="POST">
	<input style="margin-top:50px; font-size:28px; 
			margin-left: 315px;height: 70px;width: 260px; background: pink;" type="submit" name="asubmit" value="ADD A MANAGER">
	</form>
	 	<form action="" method="POST">
	<input style="margin-top:50px; font-size:28px; float: right;margin-right: 225px;
			height: 70px;width: 350px; background: violet;" type="submit" name="ssubmit" value="REMOVE A BLOOD BANK">
	</form>
 	<form action="" method="POST">
	<input style="margin-top:50px; font-size:28px; 
			margin-left: 300px;height: 70px;width: 300px; background: pink;" type="submit" name="submit" value="ADD A BLOOD BANK">
	</form>
	<div style="border: 1px solid black;background:url(Profile5.jpg);background-size: cover;height: 700px;margin-top: 20px;  font-weight: bold;font-size: 180%;overflow-y: scroll;width: 100%; ">
	<h1 style="font-size: 50px;text-align: center; color: red;">BLOOD BANK DETAILS</h1>
		<table style="margin-left: 40px;">
			<tr>
				<th>
				<td class="td">ID NO</td>
				<td class="td">NAME</td>
				<td class="td">ADDRESS</td>
				<td class="td">CITY</td>
				<td class="td">PHONE NUMBER</td>
				</th>
			</tr>
			<?php 
				$q = "SELECT * FROM `bb` WHERE 1";
				$r = mysqli_query($conn,$q);
				while($d = mysqli_fetch_assoc($r)){
			?>
			<tr>
				<th>
				<td class="td"><?php echo $d[bb_id];?></td>
				<td class="td"><?php echo $d[bb_name];?></td>
				<td class="td"><?php echo $d[bb_address];?></td>
				<td class="td"><?php echo $d[bb_city];?></td>
				<td class="td"><?php echo $d[bb_phno];?></td>
			</th>
			</tr>
			<?php 
				}
			?>
		</table>
	</div>
	<div style="border: 1px solid black;background:url(Profile5.jpg);background-size: cover;height: 700px;margin-top: 20px;  font-weight: bold;font-size: 180%;overflow-y: scroll;width: 100%;">
	<h1 style="font-size: 50px;text-align: center; color: red;">MANAGER DETAILS</h1>
		<table style="margin-left: 90px;">
			<tr>
				<th>
				<td class="td">ID NO</td>
				<td class="td">NAME</td>
				<!-- <td class="td">ADDRESS</td> -->
				<td class="td">EMAIL</td>
				<td class="td">PHONE NUMBER</td>
				</th>
			</tr>
			<?php 
				$q = "SELECT * FROM `manager` WHERE 1";
				$r = mysqli_query($conn,$q);
				while($d = mysqli_fetch_assoc($r)){
			?>
			<tr>
				<th>
				<td class="td"><?php echo $d[m_id];?></td>
				<td class="td"><?php echo $d[m_name];?></td>
				<!-- <td class="td"><?php echo $d[bb_address];?></td> -->
				<td class="td"><?php echo $d[m_email];?></td>
				<td class="td"><?php echo $d[m_phno];?></td>
			</th>
			</tr>
			<?php 
				}
			?>
		</table>
	</div>
</body>
</html>
<?php
}else{
	?>
  <script type="text/javascript">
  	alert("Login First");
  window.location.href="login.php"</script>
  <?php
}
  ?>