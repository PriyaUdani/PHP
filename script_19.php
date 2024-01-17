<html>
<head>
<body>
<form action="" method="get">
	Enter Positive Number=<input type="text" name="num"><br>
	<input type="submit" name="submit">
</form>
</body>
</head>
</html>

<?php
$a=$_REQUEST['num'];
$flag=0;

for($i=2;$i<$a;$i++)
{
	if($a%$i==0)
	{
		$flag=1;
	}
}

if($flag==1)
{
	echo "No. is not prime";
}
else
{
	echo "No. is prime";
}


?>