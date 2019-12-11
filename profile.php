<!-- https://www.eraktkosh.in/BLDAHIMS/bloodbank/donateblood.cnt -->
<?php
session_start();
require 'connect.inc.php';


// $rb = mysqli_query($conn,"SELECT `b_id` FROM `blood` WHERE `b_name` = (SELECT `user_bloodgroup` from `user`where `user_id` = '$id')");
// $rbid = mysqli_fetch_assoc($rb);


//     $query2 = "SELECT * FROM `donate` WHERE `d_id`='$id' AND `d_date`<=CURRENT_DATE AND `d_check`=0";
//           $res1 = mysqli_query($conn,$query2);
//           echo mysqli_num_rows($res1);
//           while($d1 = mysqli_fetch_assoc($res1)){
//       		echo "vldfvnlsdkfjvnl";
//             mysqli_query($conn,"UPDATE `stored` SET `s_quantity`= s_quantity+'$d1[d_quantity]' WHERE `sb_id`='$rb[b_id]' and `sbb_id`='$d1[dbb_id]'");
//             mysqli_query($conn,"UPDATE `donate` SET `d_check`=1 WHERE `d_id`='$i' AND `d_date`<CURRENT_DATE AND `d_check`=0");
//           }









if(isset($_SESSION['sname'])){
$n=$_SESSION['sname'];
$id=$_SESSION['id'];
$qu="SELECT `b_name` FROM `blood`";
$r=mysqli_query($conn,$qu);


$query="SELECT * FROM `donate`,`bb` WHERE duser_id='$id' and bb.bb_id=donate.dbb_id order by donate.d_date";
$result=mysqli_query($conn,$query);

$query1 = "SELECT * FROM `request`,`blood`,`bb` WHERE request.ob_id=blood.b_id and bb.bb_id = request.obb_id and request.ouser_id='$id' ";
$result1=mysqli_query($conn,$query1);

$result4=mysqli_query($conn,$query);

if(isset($_POST['submit'])){
	$q = "DELETE FROM `donate` WHERE `duser_id`='$id' AND `d_date`>CURRENT_DATE" ;
	mysqli_query($conn,$q);
	?>
	<script type="text/javascript">
	window.location.href="profile.php"
	</script>
	<?php
}
if(isset($_POST['searchsubmit'])){
	$_SESSION['b']=$_POST['bg'];
	?>
	<script type="text/javascript">window.location.href="search.php"</script>
	<?php
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROFILE</title>
	<style type="text/css">
		.x{
			background-color: rgb(195,0,0);
			height: 85px;
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
			text-align: center;font-size: 110%;
		}
		td{
			font-size: 23px;text-align: center;height: 70px;background: transparent;font-size: 110%;
		}
/*		input{
			margin-top:50px; 
			margin-left: 500px;height: 50px;width: 240px; background: rgb(195,0,0);
		}
*/	</style>
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
	<div class="v" style="font-size: 30px;"><a href="donate.php">Donate Blood</a>
	<!-- <div  style="font-size: 30px;"><a href="home.php">BLOOD FOR NEEDY</a> -->
</div>
	 <div style="font-size: 30px;padding-top: 20px;font-weight: bold;padding-left: 10px"><a href="home.php">BLOOD FOR NEEDY</a></div> 

<!-- div style="margin-top: 30px; background-color: pink;font-weight: bold;/*text-align: center; */height: 200px;">

<p style="text-align:center;">BLOOD FOR NEEDY</p>
<p style="font-weight: bold;font-size: 50px;">YOUR BLOOD DONATIONS WILL APPEAR HEAR</p>
</div> -->
	
<!-- <div style="background:url(Profile10.jpeg);font-weight: bold;text-align: center; height: 1130px; margin-left: -300px;"></div>
<div style="margin-top: 0px ;height: 700px;background-repeat: no-repeat;"> -->
	<div>
		<form action="" method="POST">
			<!-- <LABEL style="margin-left: 500px;font-size: 30px;">SEARCH:</LABEL> -->
			<LABEL style="/*float: left;*//* margin-*/position: absolute; left: 380px;font-size: 30px;/*margin-*/top: 105px;">SEARCH BLOOD:</LABEL>
			<!-- <input style="background: yellow;position: absolute; left:620px;top:100px; font-size: 25px;  margin-bottom: 20px;height: 50px;width: 250px;" type="search" name="search"> -->
      		<select style="background: yellow;position: absolute; left:620px;top:100px; font-size: 25px;  margin-bottom: 20px;height: 50px;width: 250px;"  name="bg">
			<!-- <option>BLOOD GROUP</option> -->
			<?php
			while($data=mysqli_fetch_assoc($r)){
 			 ?>
 			<option><?php echo $data['b_name']; ?></option>
 			 <?php
			}?>
		</select>
		<input style="background: orange; position: absolute; left:880px;top:110px; font-size: 25px;  margin-bottom: 20px;height: 30px;width: 150px;" type="submit" name="searchsubmit" value="search">
		</form>
	</div>
	<div style="border: 1px solid black;background:url(Profile5.jpg);background-size: cover;height: 700px;margin-top: 100px;  font-weight: bold;font-size: 180%;overflow-y: scroll;width: 100%; ">
			<h1 style="/*padding: 20px;*/ text-align:center;"><font color="red">Donation Details</font></h1>

			 <table style="border:'1'">
			 	<tr>
			 		<th >
			 			<td class="th">Donation id</td>
			 			<!-- <td class="th">Blood Group</td> -->
			 			<td  class="th">Date</td>
			 			<td  class="th">Quantity</td>
			 			<td class="th">Blood Bank Name</td>
			 			<td class="th">Blood Bank City</td> 

			 		</th>
			 	</tr>
			 	<?php
			 			$result7=mysqli_query($conn,"SELECT CURRENT_DATE AS C");
			 			$data7=mysqli_fetch_assoc($result7);

			 		while($data=mysqli_fetch_assoc($result)){
			 			if($data['d_date']<=$data7['C']){
			 	  ?>
			 	<tr class="trx">
			 		<th>
			 			<td><?php echo $data['d_id'] ;?></td>
			 			<!-- <td><?php echo $data['b_id'] ;?></td> -->
			 			<td><?php echo $data['d_date'] ;?></td>
			 			<td><?php echo $data['d_quantity'];echo "ml";?></td>
			 			<td><?php echo $data['bb_name'] ;?></td>
			 			<td><?php echo $data['bb_city'] ;?></td>

			 			
			 		</th>
			 	</tr>
			 <?php }} ?>
			 </table>
			 <h1>UPCOMING DONATION</h1>
			 			 <table>
			 	<tr>
			 		<th >
			 			<td class="th">Donation id</td>
			 			<td  class="th">Date</td>
			 			<td  class="th">Quantity</td>
			 			<td class="th">Blood Bank Name</td>
			 			<td class="th">Blood Bank City</td> 

			 		</th>
			 	</tr>
			 	<?php
			 		$result8=mysqli_query($conn,"SELECT CURRENT_DATE AS C");
			 			$data8=mysqli_fetch_assoc($result8);
			 		while($data1=mysqli_fetch_assoc($result4)){
			 			if($data1['d_date']>$data8['C']){
			 	  ?>
			 	<tr class="trx">
			 		<th>
			 			<td><?php echo $data1['d_id'] ;?></td>
			 			<td><?php echo $data1['d_date'] ;?></td>
			 			<td><?php echo $data1['d_quantity']; echo "ml" ;?></td>
			 			<td><?php echo $data1['bb_name'] ;?></td>
			 			 <td><?php echo $data1['bb_city'] ;?></td>

			 			
			 		</th>
			 	</tr>
			 <?php } }?>
			 </table>
<form action="" method="POST">
	
	<input style="margin-top:50px; 
			margin-left: 500px;height: 50px;width: 240px; background: rgb(195,0,0);" type="submit" name="submit" value="REMOVE UPCOMING DONATION">
</form>
	</div>
<!-- 
<div style="background:url(Profile8.jpeg);font-weight: bold;text-align: center; height: 700px;/*width:1500px; */margin-left: -100px;"></div> -->

</div>
<div style="margin-top: 700px ;height: 700px; ">
	<div style="background:url(Profile7.jpg);background-size: cover;height: 800px;font-weight: bold;font-size: 180%;overflow-y: scroll; ">
			<h1 style=" text-align:center;">Request Details</h1>

			 <table style="border='1';">
			 	<tr>
			 		<th >
			 			<td class="th">Order id</td>
			 			<td  class="th">Date</td>
			 			<td class="th">Blood Group</td>
			 			<td  class="th">Quantity</td>
			 			<td class="th">Blood Bank Name</td>
			 			<td class="th">City</td> 
			 			<!-- <td class="th">STATUS</td> -->
			 		</th>
			 	</tr>
			 	<?php
			 			// $result7=mysqli_query($conn,"SELECT CURRENT_DATE AS C");
			 			// $data7=mysqli_fetch_assoc($result7);

			 		while($data=mysqli_fetch_assoc($result1)){
			 			// if($data['d_date']<=$data7['C']){
			 			// if($data['o_date'] < $data8['C']){
			 			// 	$status = "PENDING";
			 			// }
			 			// elseif ($data['o_date'] = $data8['C']) {
			 				
			 			// }
			 			// else $status = "RECEIVED";
			 	  ?>
			 	<tr class="trx">
			 		<th>
			 			<td><?php echo $data['o_id'] ;?></td>
			 			<td><?php echo $data['o_date'] ;?></td>
			 			<td><?php echo $data['b_name'] ;?></td>
			 			<td><?php echo $data['o_quantity'];echo "ml"; ;?></td>
			 			<td><?php echo $data['bb_name'] ;?></td>
			 			<td><?php echo $data['bb_city'] ;?></td>
			 			<!-- <td><?php echo $status ;?></td> -->

			 			
			 		</th>
			 	</tr>
			 <?php } ?>
			 </table>
<!-- 			 <h1>UPCOMING DONATIONS</h1>
			 			 <table style=" ">
			 	<tr>
			 		<th >
			 			<td class="th">Donation id</td>
			 			<td  class="th">Date</td>
			 			<td  class="th">Quantity(in ml)</td>
			 			<td class="th">Blood Bank Name</td>
			 			<td class="th">Blood Bank City</td> 

			 		</th>
			 	</tr>
			 	<?php
			 		$result8=mysqli_query($conn,"SELECT CURRENT_DATE AS C");
			 			$data8=mysqli_fetch_assoc($result8);
			 		while($data1=mysqli_fetch_assoc($result4)){
			 			if($data1['d_date']>$data8['C']){
			 	  ?>
			 	<tr class="trx">
			 		<th>
			 			<td><?php echo $data1['d_id'] ;?></td>
			 			<td><?php echo $data1['d_date'] ;?></td>
			 			<td><?php echo $data1['d_quantity'] ;?></td>
			 			<td><?php echo $data1['bb_name'] ;?></td>
			 			 <td><?php echo $data['bb_city'] ;?></td>

			 			
			 		</th>
			 	</tr>
			 <?php } }?>
			 </table> -->
	</div>

</div>
<!-- 	<div style="color: black;background-color: rgba(0,0,0,0.3);">
		<h1 style="text-align: center;margin-top: 0px;">Received Details</h1>
		<table style="border='1'">
			 	<tr>
			 		<th >
			 			<td class="th">Donation id</td>
			 			<td  class="th">Date</td>
			 			<td  class="th">Quantity(in ml)</td>
			 			<td class="th">Blood Bank Name</td>
			 			<td class="th">Blood Bank City</td> 

			 		</th>
			 	</tr>
			 	<?php
			 			$result7=mysqli_query($conn,"SELECT CURRENT_DATE AS C");
			 			$data7=mysqli_fetch_assoc($result7);

			 		while($data=mysqli_fetch_assoc($result)){
			 			if($data['d_date']<=$data7['C']){
			 	  ?>
			 	<tr class="trx">
			 		<th>
			 			<td><?php echo $data['d_id'] ;?></td>
			 			<td><?php echo $data['d_date'] ;?></td>
			 			<td><?php echo $data['d_quantity'] ;?></td>
			 			<td><?php echo $data['bb_name'] ;?></td>
			 			<td><?php echo $data['bb_city'] ;?></td>

			 			
			 		</th>
			 	</tr>
			 <?php }} ?>
			 </table>
			 <h1>UPCOMING DONATIONS</h1>
			 			 <table style=" ">
			 	<tr>
			 		<th >
			 			<td class="th">Donation id</td>
			 			<td  class="th">Date</td>
			 			<td  class="th">Quantity(in ml)</td>
			 			<td class="th">Blood Bank Name</td>
			 			<td class="th">Blood Bank City</td> 

			 		</th>
			 	</tr>
			 	<?php
			 		$result8=mysqli_query($conn,"SELECT CURRENT_DATE AS C");
			 			$data8=mysqli_fetch_assoc($result8);
			 		while($data1=mysqli_fetch_assoc($result4)){
			 			if($data1['d_date']>$data8['C']){
			 	  ?>
			 	<tr class="trx">
			 		<th>
			 			<td><?php echo $data1['d_id'] ;?></td>
			 			<td><?php echo $data1['d_date'] ;?></td>
			 			<td><?php echo $data1['d_quantity'] ;?></td>
			 			<td><?php echo $data1['bb_name'] ;?></td>
			 			 <td><?php echo $data['bb_city'] ;?></td>

			 			
			 		</th>
			 	</tr>
			 <?php } }?>
			 </table>
	</div> -->

<!-- </div> -->

</body>
</html>
<?php
}
else{
	?>
  <script type="text/javascript">
  	alert("Login First");
  window.location.href="login1.php"</script>
  <?php
}
  ?>

