<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		
<?php

for($i=1;$i<=9;$i++){
	echo  " 2 * " . $i . " = " . $i*2 . "<br>";
}

echo "<br>이건 밑에건 짤리게됨 ㅎㅎ <br>";
for($i=1;$i<=9;$i++){
	echo  " 2 * " . $i . " = " . $i*2 . "<br>";
	if($i==6) break;
}
?>


	</body>
</html>