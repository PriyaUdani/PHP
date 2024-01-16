<html>
<head>
<body>
<form action="" method="get">
	Enter number<input type="text" name="num"><br>
	<input type="submit" name="submit">
</form>
</body>
</head>
</html>

<?php

$no=$_REQUEST['num'];
$fact=1;

for($i=$no;$i>=1;$i--)
{
	$fact=$fact*$i;
}

echo $fact;

?>