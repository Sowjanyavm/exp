<?php 

$a=array(array(2,1),array(3,2),);
$b=array(array(1,1),array(1,3),);

for($i=0;$i<count($a);$i++){
	echo "<br/>";
	for($j=0;$j<count($b);$j++){
		for($k=0;$k<count($b);$k++){

		$result[$i][$j] = $result[$i][$j]+($a[$i][$k]*$b[$k][$j]);
		
		echo "&nbsp".$result[$i][$j]."&nbsp";
	}
	}
}
?>
