<html>
<head>
<body>
<form action="" method="get">
	Enter the number(1-10)<input type="text" name="num"><br>
	<input type="submit" name="submit">
</form>
</body>
</head>
</html>

<?php
$no=$_REQUEST['num'];
echo "My Guess is = ".$no;
echo "<br>";

$a=rand(1,10);
echo "Random no. by pc is = ".$a;
echo "<br>";

if($a==$no)
{
	echo "you have guess right no.";
	echo "<br>";
}
else
{
	echo "you have guess wrong no.";
	echo "<br>";
}
?>