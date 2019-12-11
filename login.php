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
if($data['user_id']==4){
  ?>
  <script type="text/javascript">window.location.href="admin.php"</script>
  <?php 
}else{
  ?>
  <script type="text/javascript">window.location.href="login.php"</script>
  <?php  
}
}
else{
  ?>
   <script type="text/javascript">
    alert("Enter Correct Details");
  window.location.href="login.php"</script>
  <?php 

}
}
?>
<!DOCTYPE html>
<html>

<head>

<title>LOGIN</title>

<style type="text/css">
 body{
  background:url(SignUpBG.jpg);
  background-size:cover;
}
h1{
  color:tomato;
  margin-top:15px;
  text-align:center;
  font-size:50px;
}

.centre{
   margin-top:30px;
   margin-bottom:30px;
   margin-left:300px;
   font-family:serif;
   font-weight:900;
   font-size:55px;
   color:tomato;
}

.loginbox{
  margin:50px 450px;
  border:1px solid white;
  /*text-align:center;*/
  padding:30px 50px;
  background: black;
}

.loginbox input[type="email"],input[type="text"],input[type="number"],input[type="password"]{
    border:none;
    border-bottom:1.5px solid #fff;
    background:transparent;
    outline: none;
    /*height: 40px;*/
    color: #eef;
    font-size:18px;
  }
 

  .loginbox label{
   color:white;
   font-family:courier;
}

  .loginbox input[type="submit"]{
    margin-left:75px;
    height:35px;
    width:150px;
    background:red;
    border:none;
    outline:none;
    color:white;
    font-size:18px;
}
   
  .loginbox input[type="submit"]:hover{
    cursor:pointer;
    border:none;
    outline:none;
    background:yellow;
}
    .loginbox a{
   color:tomato;
   <!--margin-left:50px;-->
}

   .loginbox a:hover{
   color:yellow;
   cursor:pointer;
}
</style>

</head>

<body>
    <!-- <?php require 'connect.inc.php';?> -->
   <div class="centre">
     <p></p>
   </div> 
         <div class="loginbox">
  <h1>Login</h1>
   <form action="" method="POST">
   
      <label>USER NAME:</label>
      <br><br>
      <input type="text" name="username" placeholder="Enter Your Name" required>
      <br><br>
      <label>PASSWORD:</label>
      <br><br>
      <input type="password" name="password" placeholder="Enter Your Password" required>
      <br><br>

      <br><br>
               <input type="submit" name="submit" value="Login"><br><br>
      <!-- <a href="#">Forgot Password?</a><br><br> -->
      <a href="donor login.html" target="_blank">Already have an account?</a>
   </form>
</div>
</body>

</html>
