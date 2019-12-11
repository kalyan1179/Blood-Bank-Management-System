  
<?php 
require 'connect.inc.php';
session_start();

$i=$_SESSION['id'];

// if(isset($_POST['submit'])){
$result8=mysqli_query($conn,"SELECT CURRENT_DATE AS Cd");
            $data8=mysqli_fetch_assoc($result8);
// echo $data8['Cd'];
    $q1 = "SELECT COUNT(*) as cv FROM `donate` WHERE `duser_id`='$i' and `d_date`>CURRENT_DATE";
$res = mysqli_query($conn,$q1);
$cou = mysqli_fetch_assoc($res);
  //echo $cou;
if($cou['cv']>0){
  ?>
  <script type="text/javascript">
    
  alert("You can Schedule only 1 donation");
                window.location.href="profile.php"
  </script>
  <?php
  exit();
}



$qu="SELECT `bb_city` FROM `bb` ORDER BY bb_city";
$r=mysqli_query($conn,$qu);
// $data=mysqli_fetch_assoc($r);
if(isset($_POST['submit'])){
    $c = $_POST['city'];
    $q = $_POST['quantity'];
    $d = $_POST['date'];
    $query = "SELECT `bb_id` FROM `bb` WHERE `bb_city`='$c'";
    $result = mysqli_query($conn,$query);
  $count=mysqli_num_rows($result);

            if($d<$data8['Cd']){
              //echo "lyugsiacfh";
              ?>
               <script type="text/javascript">
                alert("Enter today's date or above");
                window.location.href="profile.php"</script>
               <?php
              exit();
            }
  $query2="SELECT `d_id` as did,MAX(`d_date`) as t FROM `donations` GROUP BY `duser_id` HAVING `duser_id`= '$i'";
    $result1 = mysqli_query($conn,$query2);
    $dat=mysqli_fetch_assoc($result1);
    $date=$dat['t'];$did=$dat['did'];
    // $_SESSION['did']=$date;

$query5="SELECT * FROM `donate` WHERE `duser_id`= '$i'";
    $result2 = mysqli_query($conn,$query5);
    $data2 = mysqli_num_rows($result2);
    if($data2==0){
      $date='0001-01-01';
    }//echo $d;echo "  fgbsgbs    ";echo $date;echo "\n";

    $query3 = "SELECT DATEDIFF('$d','$date') as difference";
    $result3 = mysqli_query($conn,$query3);
    $difference=mysqli_fetch_assoc($result3);
    //echo $difference['difference'];
    $_SESSION['diff']=$difference['difference'];


    if($difference['difference']>56){
      // echo "vldfvnlsdkfjvnl";
    if($count==1){
        $data=mysqli_fetch_assoc($result);
      $v=$data['bb_id'];
    $query1 = "INSERT INTO `donate`( `duser_id`, `dbb_id`, `d_date`, `d_quantity`) VALUES ('$i','$v','$d','$q')";
          mysqli_query($conn,$query1);







    }
    ?>
    <script type="text/javascript">window.location.href="profile.php"</script>
    <?php
}
else{
    ?>
  <script type="text/javascript">
    alert("You can't donate blood frequently 2 months is the minimum gap for the consecutive blood donations.");
  window.location.href="profile.php"</script>
  <?php
}
}
?>

<!DOCTYPE html>
<html>

<head>

<title>DONATE</title>

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
   /*margin-left:50px;*/
}

   .loginbox a:hover{
   color:yellow;
   cursor:pointer;
}
</style>

</head>

<body>
   <?php require 'connect.inc.php';?>
    
   <div class="centre">
     <p></p>
   </div> 
         <div class="loginbox">
  <h1>DONATION DETAILS</h1>
   <form action="" method="POST">
      
<label>LOCATION:</label>
      <br><br>
      <select name="city" placeholder="Select city">
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
<label>QUANTITY:</label>
      <br><br>
      <input type="number" name="quantity" placeholder="Enter quantity" required min="0 ">
      <br><br>
      <label>DATE OF DONATION:</label>
      <br><br>
      <input type="DATE" name="date" placeholder="Enter date" required>
      <br><br>
               <input type="submit" name="submit" value="Submit"><br><br>
      </form>
</div>
</body>

</html>
 