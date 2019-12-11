<?php 
session_start();
require 'connect.inc.php';

$i=$_SESSION['id'];

// if(isset($_POST['submit'])){

$qu="SELECT `bb_city` FROM `bb` ORDER BY bb_city";
$r=mysqli_query($conn,$qu);
// $data=mysqli_fetch_assoc($r);
if(isset($_POST['submit'])){
  $c=$_POST['city'];
  $bg=$_POST['bg'];
  // echo $bg;
  $quantity=$_POST['quantity'];

  $q1 = "SELECT `b_id` FROM `blood`,`user` WHERE blood.b_name='$bg' and user.user_id='$i'";
  $result=mysqli_query($conn,$q1);
  $d=mysqli_fetch_assoc($result);
  $x = $d['b_id'];

  $result7=mysqli_query($conn,"SELECT CURRENT_DATE AS C");
  $data7=mysqli_fetch_assoc($result7);
  $p=$data7['C'];

  $q = "SELECT `bb_id` FROM `bb` WHERE `bb_city`= '$c'";
  $re=mysqli_query($conn,$q);
  $co = mysqli_num_rows($re);
  // echo $co;
  if($co == 1){
    $data=mysqli_fetch_assoc($re);
    $v = $data['bb_id'];
    // echo $co;
    $que=" INSERT INTO `request` (`ouser_id`, `obb_id`, `o_quantity`, `ob_id`, `o_date`) VALUES ('$i','$v','$quantity','$x','$p') ";
    mysqli_query($conn,$que);
    ?>
    <script type="text/javascript">window.location.href="profile.php"</script>
    <?php
}
}
?>

<!DOCTYPE html>
<html>

<head>

<title>REQUEST</title>

<style type="text/css">
 body{
  background:url(blood-donation.jpg);
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
  /*align:left;*/
  padding:30px 50px;
  background: black;
}

.loginbox input[type="email"],input[type="text"],input[type="number"],input[type="password"]{
    border:none;
    border-bottom:1.5px solid #fff;
    background:transparent;
    outline: none;
    height: 40 px;
    color: #eef;
    /*color: cyan;*/
    font-size:18px;
  }
 
.loginbox select {
    border:none;
    border-bottom:1.5px solid #fff;
    background:transparent;
    outline: none;
    height: 32 px;
    color: white;
    font-size:16px;
}
option{
	color: black;
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
  <h1>REQUEST DETAILS</h1>
   <form action="" method="POST">
      
<label>LOCATION:</label>
      <br><br>
      <select name="city" placeholder="Select city" required>
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
<label>BLOOD GROUP:</label>
      <br><br>
        <select name="bg" placeholder=select bloodgroup required>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>
      <br><br>
<label>QUANTITY:</label>
      <br><br>
      <input type="number" name="quantity" placeholder="Enter quantity" required>
      <br><br>
<!--       <label>DATE OF DONATION:</label>
      <br><br>
      <input type="DATE" name="date" placeholder="Enter date" required>
      <br><br> -->
               <input type="submit" name="submit" value="Submit"><br><br>
      <!-- <a href="#">Forgot Password?</a><br><br> -->
      <!-- <a href="donor login.html" target="_blank">Already have an account?</a> -->
   </form>
</div>
</body>

</html>
