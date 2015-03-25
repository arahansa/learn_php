<?php
	
	$student = array(50, 40, 30, 20);
	$sum=0;
	for($i=0;$i<count($student);$i++){
		echo "student : ".$student[$i]."<br>";
		$sum+=$student[$i];
	}
	echo "complete!<br>";
	echo "hap :".$sum;

?>