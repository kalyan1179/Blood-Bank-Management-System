<?php
ini_set('max_execution_time', 0);
require 'connect.inc.php';
$id=0;
// $doj="2019-10-02";
// $p=8976543200;
// while($id<=62){
// 	if($id>10 and $id<15){
		

// 	}
// 	else{
// 		while ($b <= 10) {
// 			# code...
// 		}
		
// 	}
// 	$id=$id+1;
	
// }
$d = array(
'VIZAG',
'VIJAYAWADA',
'HYDERABAD'
,'WARANGAL'
,'LOHIT'
,'TIRAP'
,'CACHAR'
,'HAILAKANDI'
,'PATNA'
,'VAISHALI'
,'BIJAPUR'
,'KOREA'
,'GOA'
,'PANJI'
,'AHMEDABAD'
,'DWARKA'
,'AMBALA'
,'HISAR'
,'BILASPUR'
,'KINNAUR'
,'LEH'
,'SRINAGAR'
,'BOKARO'
,'CHATRA'
,'BANGALORE'
,'BIJAPUR'
,'ALLEPPEY'
,'KANNUR'
,'BHOPAL'
,'DHAR'
,'DHULE'
,'LATUR'
,'CHANDEL'
,'BISHNUPUR'
,'SHILLONG'
,'JAINTIA HILLS'
,'CHAMPHAI'
,'LUNGLEI'
,'DIMAPUR'
,'PHEK'
,'BALESWAR'
,'CUTTACK'
,'AMRITSAR'
,'BARNALA'
,'ALWAR'
,'DHOLPUR'
,'GANGTOK'
,'CHUBA'
,'CHENNAI'
,'OOTY'
,'AGARTALA'
,'DHALAI'
,'VARANASI'
,'AGRA'
,'HARIDWAR'
,'DEHRADUN'
,'ASANSOL'
,'KOLKATA'
);
sort($d);
echo "hello world";echo "\n";
echo 'gvhjb';echo "\n";
?>
<select>
<?php
for($i=0;$i<count($d);$i++){
	?>
	<option><?php echo $d[$i]; ?></option>
	<?php
}
?>
</select>