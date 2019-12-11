<?php
session_start();
require 'connect.inc.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    if(1 == mysqli_num_rows(mysqli_query($conn,"SELECT 1 FROM `user` WHERE `user_username`='$username'"))){
          ?>
            <script type="text/javascript">
                alert("USERNAME ALREADY EXISTS");
            window.location.href="Signup.php"</script>
    <?php 

    }
    $fathername = $_POST['fathername'];
    $name = $_POST['name'];
    $age = $_POST['Age'];
    $gender = $_POST['gender'];
    $weight = $_POST['weight'];
    $emailId = $_POST['email'];
    $ph = $_POST['phno'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $bg = $_POST['BloodGroup'];
    $password = $_POST['password'];
$_SESSION['sname']=$name;
// $_SESSION['id']=$user_id;
$query = "INSERT INTO `user`( `user_name`, `user_fname`, `user_username`, `user_password`, `user_age`, `user_gender`, `user_weight`, `user_bloodgroup`, `user_city`, `user_address`, `user_state`, `user_phoneNumber`, `user_emailId`) VALUES ('$name','$fathername','$username','$password','$age','$gender','$weight','$bg','$city','$address','$state','$ph','$emailId')";
mysqli_query($conn,$query);
  ?>
  <script type="text/javascript">window.location.href="profile.php"</script>
  <?php 
$query1 = "SELECT `user_id` FROM `user` WHERE `user_username`= `$username`";
$result=mysqli_fetch_assoc(mysqli_query($conn,$query1));
$_SESSION['id']=$result['user_id'];
}
$q="SELECT  `bb_city` FROM `bb` ORDER BY bb_city";
$r=mysqli_query($conn,$q);

$d=mysqli_fetch_assoc($r);
?>
<!DOCTYPE html>
<html>

<head>

<title>SIGNUP PAGE</title>

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
  <h1>Signup</h1>
   <form action="" method="POST">
      <label>NAME:</label>
      <br><br>
      <input type="text" name="name" placeholder="Enter Your Name" required>
      <br><br>
      <label>USER NAME:</label>
      <br><br>
      <input type="text" name="username" placeholder="eg:abc@123" required>
      <br><br>
      <label>CREATE PASSWORD:</label>
      <br><br>
      <input type="password" name="password" placeholder="" required>
      <br><br>
<label>FATHER'SNAME:</label>
      <br><br>
      <input type="text" name="fathername" placeholder="Enter Your Father'sname" required>
      <br><br>
      <label>GENDER:</label>
      <br><br>
        <select name="gender" placeholder="Select Gender" required>
<option>Select Gender</option>
<option value="Male">male</option>
<option value="Female">female</option>
<option value="Others">others</option>
</select>
<br><br>

<label>AGE:</label>
      <br><br>
      <input type="number" name="Age" placeholder="Enter Your Age" min="18" required>
      <br><br>

      <!-- <label>D.O.B:</label> 
      <br><br>
<input type="date" name="Birthday">
<br><br> -->
<label>BLOODGROUP:</label>
      <br><br>
        <select name="BloodGroup" placeholder=select bloodgroup>
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
<label>Body Weight:</label>
      <br><br>
      <input type="number" name="weight" placeholder="Enter Your Weight" required>
      <br><br>
<label>EMAILID:</label>
      <br><br>
      <input type="email" name="email" placeholder="Enter Your e-mailid" required>
      <br><br>
<label>STATE:</label>
      <br><br>
        <select name="state" placeholder="Select State">
<option>Select State</option>
<option value="ArunchalPradesh">ArunchalPradesh</option>
<option value="AndhraPradesh">AndhraPradesh</option>
<option value="Bihar">Bihar</option>
<option value="Chattisgarh">Chattisgarh</option>
<option value="Assam">Assam</option>
<option value="Haryana">Haryana</option>
<option value="Goa">Goa</option>
<option value="HimachalPradesh">HimachalPradesh</option>
<option value="MadhyaPradesh">MadhyaPradesh</option>
<option value="Telangana">Telangana</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Kerala">Kerala</option>
<option value="TamilNadu">TamilNadu</option>
<option value="Karnataka">Karnataka</option>
<option value="WestBengal">WestBengal</option>
<option value="Maharastra">Maharastra</option>
<option value="Manipur">Manipur</option>
<option value="Nagaland">Nagaland</option>
<option value="Punjab">Punjab</option>
<option value="Orrisa">Orrisa</option>
<option value="Jammu&Kashmir">Jammu&Kashmir</option>
<option value="Sikkim">Sikkim</option>
<option value="UttarPradesh">UttarPradesh</option>
<option value="Uttarkhand">Uttarkhand</option>
<option value="Gujarat">Gujarat</option>
<option value="Jarkhand">Jarkhand</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Tripura">Tripura</option>
</select>
<br><br>
<label>CITY:</label>
<br><br>
      <select>
<?php
while($d=mysqli_fetch_assoc($r)){
    ?>
    <option><?php echo $d['bb_city']; ?></option>
    <?php
}
?>
</select>
<br><br>
<label>ADDRESS:</label>
      <br><br>
      <textarea name="address"></textarea>
      <br><br>
      <label>CONTACTNO.:</label>
      <br><br>
      <input type="number" name="phno" placeholder="Enter Phone Number" required>
      <br><br>
               <input type="submit" name="submit" value="Submit"><br><br>
      <!-- <a href="#">Forgot Password?</a><br><br> -->
      <a href="login1.php" target="_blank">Already have an account?</a>
   </form>
</div>
</body>

</html>
