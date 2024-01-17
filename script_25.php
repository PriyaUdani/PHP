<html>
<head>
<body>
<form action="" method="get">
	Enter No.1=<input type="text" name="val_1"><br>
	Enter No.2=<input type="text" name="val_2"><br>
	<input type="submit" name="submit">
</form>
</body>
</head>
</html>

<?php
$a=$_REQUEST['val_1'];
$b=$_REQUEST['val_2'];

echo "a=".$a;
echo "<br>";
echo "b=".$b;
echo "<br>";
echo "<br>";

$a=$a+$b;
$b=$a-$b;
$a=$a-$b;

echo "a=".$a;
echo "<br>";
echo "b=".$b;

?>