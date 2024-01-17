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
echo "Original no. = ".$no;
echo "<br>";

$b=strrev($no);
echo "reverse no = ".$b;
echo "<br>";


if($no==$b)
{
	echo "Given no. is palindrome";
	echo "<br>";
}
else
{
	echo "Given no. is not palindrome";
	echo "<br>";
}
?>