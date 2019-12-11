<!-- https://www.eraktkosh.in/BLDAHIMS/bloodbank/donateblood.cnt -->
<?php
session_start();//error_reporting(0);
require 'connect.inc.php';
$n=$_SESSION['v'];
$id=$_SESSION['mid'];
// echo $id;
// $query="SELECT * FROM `donate`,`manages` WHERE `m_id`='$id' and manages.mbb_id=donate.dbb_id order by donate.d_date";
$f = mysqli_query($conn,"SELECT `mbb_id` FROM `manages` WHERE `mm_id`='$id'");
$ap = mysqli_fetch_assoc($f);
$i = $ap['mbb_id'];
$query = "SELECT * FROM `donate` WHERE `dbb_id`='$i'";
$result=mysqli_query($conn,$query);
$query2 = "SELECT * FROM `request` WHERE `obb_id`='$i'";
$result2=mysqli_query($conn,$query2);
$result4=mysqli_query($conn,$query);
$result5=mysqli_query($conn,$query2);

if(isset($_POST['rsubmit'])){
	
	?>
	<script type="text/javascript">
	window.location.href="removed.php"
	</script>
	<?php exit();
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
</style>
</head>
<body>

<div class="x">
	<div class="v" style="font-size: 30px;"><a href="manager.php"><?php echo $n;?></a></div>
	<div class="v" style="font-size: 60px;margin-top: 0px;margin-right: 10px">|</div>
	<div class="v" style="font-size: 30px;"><a href="logout.php">Log Out</a></div>
<!-- 	<div class="v" style="font-size: 60px;margin-top: 0px;margin-right: 10px">|</div>
	<div class="v" style="font-size: 30px;"><a href="order.php">Request Blood</a></div>
	<div class="v" style="font-size: 60px;margin-top: 0;margin-right: 10px">|</div>
	<div class="v" style="font-size: 30px;"><a href="donate.php">Donate Blood</a> -->
</div>
	 <div style="font-size: 30px;padding-top: 20px;font-weight: bold;padding-left: 10px;margin-top: -80px;">BLOOD FOR NEEDY</div> 
	 <div style="border: 1px solid black;background:url(Profile5.jpg);background-size: cover;height: 700px;margin-top: 28px;  font-weight: bold;font-size: 180%;overflow-y: scroll;width: 100%; ">
			<h1 style="/*padding: 20px;*/ text-align:center;"><font color="red">Donation Details</font></h1>

			 <table style="border:'1'">
			 	<tr>
			 		<th >
			 			<td class="th">Donation id</td>
			 			<td class="th">Donor id</td>
			 			<td  class="th">Date</td>
			 			<td  class="th">Quantity</td>
			 		</th>
			 	</tr>
			 	<?php
			 			$result7=mysqli_query($conn,"SELECT CURRENT_DATE AS C");
			 			$data7=mysqli_fetch_assoc($result7);

			 		while($data=mysqli_fetch_assoc($result)){
			 			if($data['d_date']<$data7['C']){
			 	  ?>
			 	<tr class="trx">
			 		<th>
			 			<td><?php echo $data['d_id'] ;?></td>
			 			<td><?php echo $data['duser_id'] ;?></td>
			 			<td><?php echo $data['d_date'] ;?></td>
			 			<td><?php echo $data['d_quantity'];echo "ml";?></td>
			 		<!-- 	<td><?php echo $data['bb_name'] ;?></td>
			 			<td><?php echo $data['bb_city'] ;?></td> -->

			 			
			 		</th>
			 	</tr>
			 <?php }} ?>
			 </table>
			 <h1>TODAY'S DONATION</h1>
			 			 <table>
			 	<tr>
			 		<th >
			 			<td class="th">Donation id</td>
			 			<td class="th">Donor id</td>
			 			<td  class="th">Date</td>
			 			<td  class="th">Quantity</td>
			 		</th>
			 	</tr>
			 	<?php
			 		$result8=mysqli_query($conn,"SELECT CURRENT_DATE AS C");
			 			$data8=mysqli_fetch_assoc($result8);
			 		while($data1=mysqli_fetch_assoc($result4)){
			 			if($data1['d_date']==$data8['C']){
			 	  ?>
			 	<tr class="trx">
			 		<th>
			 			<td><?php echo $data1['d_id'] ;?></td>
			 			<td><?php echo $data1['duser_id'] ;?></td>
			 			<td><?php echo $data1['d_date'] ;?></td>
			 			<td><?php echo $data1['d_quantity'];echo "ml";?></td>
			 			
			 		</th>
			 	</tr>
			 <?php } }?>
			 </table>
			 <form action="" method="POST">
	
	<input style="margin-top:50px; text-align: center;
			margin-left: 550px;height: 50px;width: 160px; background: rgb(195,0,0);" type="submit" name="rsubmit" value="REMOVE 1 DONATION">
</form>
			</div>
				 <div style="border: 1px solid black;background:url(Profile5.jpg);background-size: cover;height: 700px;margin-top: 28px;  font-weight: bold;font-size: 180%;overflow-y: scroll;width: 100%; ">
			<h1 style="/*padding: 20px;*/ text-align:center;"><font color="red">Request Details</font></h1>

			 <table style="border:'1'">
			 	<tr>
			 		<th >
			 			<td class="th">Order id</td>
			 			<td class="th">Customer id</td>
			 			<td  class="th">Date</td>
			 			<td  class="th">Quantity</td>
			 		</th>
			 	</tr>
			 	<?php
			 			$result7=mysqli_query($conn,"SELECT CURRENT_DATE AS C");
			 			$data7=mysqli_fetch_assoc($result7);

			 		while($data2=mysqli_fetch_assoc($result2)){
			 			if($data2['o_date']<$data7['C']){
			 	  ?>
			 	<tr class="trx">
			 		<th>
			 			<td><?php echo $data2['o_id'] ;?></td>
			 			<td><?php echo $data2['ouser_id'] ;?></td>
			 			<td><?php echo $data2['o_date'] ;?></td>
			 			<td><?php echo $data2['o_quantity'];echo "ml";?></td>
			 		</th>
			 	</tr>
			 <?php }} ?>
			 </table>
			 <h1>TODAY'S REQUESTS</h1>
			 			 <table>
			 	<tr>
			 		<th >
			 			<td class="th">Order id</td>
			 			<td class="th">Customer id</td>
			 			<td  class="th">Date</td>
			 			<td  class="th">Quantity</td>

			 		</th>
			 	</tr>
			 	<?php
			 		$result8=mysqli_query($conn,"SELECT CURRENT_DATE AS C");
			 			$data8=mysqli_fetch_assoc($result8);
			 		while($data3=mysqli_fetch_assoc($result5)){
			 			if($data3['o_date']==$data8['C']){
			 	  ?>
			 	<tr class="trx">
			 		<th>
			 			<td><?php echo $data3['o_id'] ;?></td>
			 			<td><?php echo $data3['ouser_id'];?></td>
			 			<td><?php echo $data3['o_date'] ;?></td>
			 			<td><?php echo $data3['o_quantity'];echo "ml";?></td>
			 			
			 		</th>
			 	</tr>
			 <?php } }?>
			 </table>
<!-- 			 <form action="" method="POST">
	
	<input style="margin-top:50px; text-align: center;
			margin-left: 550px;height: 50px;width: 160px; background: rgb(195,0,0);" type="submit" name="rsubmit" value="REMOVE 1 DONATION">
</form> -->
			</div>
</body>
</html>


