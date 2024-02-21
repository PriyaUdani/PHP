<html>
<head>
<body>
<form action="" method="get">
	Enter Number=<input type="text" name="num"><br>
	<input type="submit" name="submit">
</form>
</body>
</head>
</html>

<?php
$no=$_REQUEST['num'];

$b=sqrt($no);
echo "square root of $no is : ".$b;
?>