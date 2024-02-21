<html>
<head>
<body>
<form action="" method="get">
	Enter No.1=<input type="text" name="val_1"><br>
	Enter No.2=<input type="text" name="val_2"><br>
	Enter No.3=<input type="text" name="val_3"><br>
	<input type="submit" name="submit">
</form>
</body>
</head>
</html>

<?php
$no1=$_REQUEST['val_1'];
$no2=$_REQUEST['val_2'];
$no3=$_REQUEST['val_3'];

$a=max($no1,$no2,$no3);
echo "Maximum value out 3 = ".$a;
?>