<?php
session_start();
require 'connect.inc.php';
if(isset($_POST['submit'])){
  $e = $_POST['email'];
  $p = $_POST['p'];
  $x = mysqli_query($conn,"SELECT * FROM `manager` WHERE `m_email`='$e' and `m_password`='$p'");
  if(mysqli_num_rows($x)==1){
    $as=mysqli_fetch_assoc($x);
      $_SESSION['mid'] = $as['m_id'];
      $_SESSION['v'] = $as['m_email'];

    ?>
    <script type="text/javascript">window.location.href="manager.php"</script>
    <?php
}
else{
   ?>
    <script type="text/javascript">alert("enter correct details");
     window.location.href="managerlogin.php"</script>
    <?php
}
}
?>
<!DOCTYPE html>
<html>

<head>

<title>MANAGER LOGIN</title>

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
   
      <label>Email:</label>
      <br><br>
      <input type="text" name="email" placeholder="Enter Your Name" required>
      <br><br>
      <label>PASSWORD:</label>
      <br><br>
      <input type="password" name="p" placeholder="Enter Your Password" required>
      <br><br>

      <br><br>
               <input type="submit" name="submit" value="Login"><br><br>
      <!-- <a href="#">Forgot Password?</a><br><br> -->
      <!-- <a href="donor login.html" target="_blank">Already have an account?</a> -->
   </form>
</div>
</body>

</html>
