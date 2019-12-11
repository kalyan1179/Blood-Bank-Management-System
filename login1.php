<?php
session_start();
require 'connect.inc.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];

    $password = $_POST['password'];
// $_SESSION['sname']=$name;
// $_SESSION['id']=$user_id;
$query = "SELECT * FROM `user` WHERE user_username='$username' and user_password='$password'";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
if($count==1){
  $data=mysqli_fetch_assoc($result);
  $_SESSION['sname']=$data['user_name'];
$_SESSION['id']=$data['user_id'];
if(0){
	?>
	<script type="text/javascript">window.location.href="admin.php"</script>
	<?php 
}else{
  ?>
  <script type="text/javascript">window.location.href="profile.php"</script>
  <?php  
}
}
else{
	?>
	 <script type="text/javascript">
  	alert("Enter Correct Details");
  window.location.href="login1.php"</script>
	<?php 

}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>LOGIN PAGE</title>
<style>
body {
	background:url(blood-bank.jpg);
	background-size: cover;
	font-family: sanserif ;
}

.loginbox {
	width: 320px;
	height: 500px;
	background: black;
	color: #fff;
	top: 50%;
	left: 50%;
	position: absolute;	
	transform: translate(-155%,-50%);
	box-sizing: border-box;
	padding:70px 30px;
}

.avatar {
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;;
	top: -50px;
	left: calc(50% - 50px)
}

h1{
	margin:0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 28px;
}

.loginbox p{
	font-weight: bold;
}

.loginbox input{
	width: 100%;
	margin-bottom: 20px;
}

.loginbox input[type="text"],input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background:transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}

.loginbox input[type="submit"]
{
	border: none;
	outline:none;
	height: 40px;
	background: #fb2525;
	color: #fff;
	font-size: 18px;
}

.loginbox input[type="submit"]:hover
{
	cursor:pointer;
	background: blue;
	color:#000;
}

.loginbox a
{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color:darkgrey;
}

.loginbox a:hover
{
	color: lightblue;
}
</style>
</head>
<body>
	<div class="loginbox">
	<img src="avatar.png" class="avatar">
		<h1>Login here</h1>
		<form action="" method="POST">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password">
			<input type="submit" name="submit" value="Login">
			<a href="SignUp.php" target="_blank" style="font-size: 20px;">Don't have an account?</a>
			<br>
			<!-- <a href="#">Forgot password?</a> -->
			
			
		</form>
		
	</div>
</body>
</html>