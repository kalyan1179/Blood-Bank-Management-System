<!-- https://www.eraktkosh.in/BLDAHIMS/bloodbank/donateblood.cnt -->
<!-- https://www.disabled-world.com/calculators-charts/blood-chart.php -->
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<style type="text/css">
		.x{
			background-color: rgb(195,0,0);
			height: 75px;
			width: 100%;
            margin: 0;
		}
		.v{
			float:right;margin-top: 20px;margin-right: 25px;


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
		.e a:hover
		{
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<?php
	session_start();
if(!isset($_SESSION['sname'])){
	
	?>
<div class="x">
	<div class="v" style="font-size: 30px;"><a href="SignUp.php">Sign Up</a></div>
	<!-- <button class="v" >Login</button> -->

	<div class="v" style="font-size: 60px;margin-top: 0px;margin-right: 10px">|</div>
	<div class="v" style="font-size: 30px;"><a href="login1.php">User Login</a></div>
	<div class="v" style="font-size: 60px;margin-top: 0;margin-right: 10px">|</div>
	<div class="v" style="font-size: 30px;"><a href="login.php">Admin</a></div>
	<div class="v" style="font-size: 60px;margin-top: 0;margin-right: 10px">|</div>
	<div class="v" style="font-size: 30px;"><a href="managerlogin..php">Manager Login</a></div>
	<div style="font-size: 30px;padding-top: 20px;font-weight: bold;padding-left: 10px"><a href="home.php">BLOOD FOR NEEDY</a></div>
</div>
	<!-- <div style="font-size: 30px;padding-top: 20px;font-weight: bold;padding-left: 10px"><a href="home.php">BLOOD FOR NEEDY</a></div> -->
<?php	}
else{
	$n=$_SESSION['sname'];
	?>
	<div class="x">
	<div class="v" style="font-size: 20px;margin-top: 25px;"><a href="profile.php"><?php echo $n;?></a></div>
	<!-- <div class="v" style="font-size: 30px;"><?php echo $diff." ".$n;?></div> -->
	<!-- <div class="v" style="font-size: 30px;"><?php echo $n1;?></div> -->

	<!-- <button class="v" >Login</button> -->
	<div class="v" style="font-size: 60px;margin-top: 0px;margin-right: 10px">|</div>
	<div class="v" style="font-size: 30px;"><a href="logout.php"><!-- <button type="button" style=" background-color: rgb(195,0,0);margin: 0px;font-size: 30px; border: transparent;font-weight:bold; ">Log Out</button> -->Log Out</a></div>
	<div class="v" style="font-size: 60px;margin-top: 0px;margin-right: 10px">|</div>
	<div class="v" style="font-size: 30px;"><a href="order.php">Request Blood</a></div>
	<div class="v" style="font-size: 60px;margin-top: 0;margin-right: 10px">|</div>
	<div class="v" style="font-size: 30px;"><a href="donate.php">Donate Blood</a></div>
<!-- 	<div class="v" style="font-size: 60px;margin-top: 0;margin-right: 10px">|</div>
	<div class="v" style="font-size: 30px;"><a href="">About Us</a></div> -->
	<div style="font-size: 30px;padding-top: 20px;font-weight: bold;padding-left: 10px"><a href="home.php">BLOOD FOR NEEDY</a></div>
</div>
	<?php
}
?>
</div>
<div class="p">
	<div class="ul">
		<ul style="position: absolute;top: 150px;left:600px;font-size: 40px;font-style: italic;font-weight: bold;color: blue;">
			<li><a href="whyblooddonation.php" >Why Donate Blood?</a></li>
			<li><a href="benifitsofdonatingblood.html">Benefits of Donating Blood</a></li>
			<li><a href="factsaboutblood.html">Facts about Blood</a></li>
			<li><a href="beforeyoudonateblood.html">Before you Donate</a></li>
			<li><a href="predonationsreening.html">Pre Donation Screening</a></li> 
			<li><a href="blooddonation.html">Blood Donation</a></li>
			<li><a href="postdonation.html">Post Donation Screening</a></li>
		</ul>
	</div>
		<a href="contactus.html" style="text-align: center;font-size: 50px;float: right; margin-top: 520px;margin-right: -230px;">Contact Us</a>
	<div class="v" style="font-size: 60px;margin-top: 520px;margin-right: 10px">|</div>
		<a href="About_us.html" style="text-align: center;font-size: 50px;float: right;margin-top: 520px;margin-right: 20px;">About Us</a>
</div>
</body>
</html>
