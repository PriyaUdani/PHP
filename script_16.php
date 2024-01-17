<html>
<head>
<body>
<form action="" method="get">
	Enter the String<input type="text" name="my_string"><br>
	<input type="submit" name="submit">
</form>
</body>
</head>
</html>

<?php

$a=$_REQUEST['my_string'];
$count=0;

$b=strlen($a);
//echo $b;

echo "<br>";




for($i=0;$i<$b;$i++)
{
	
	$c=substr($a,$i,1);
	if($c=='a' || $c=='e' || $c=='i' || $c=='o' || $c=='u')
	{
			$count=$count+1;
			//echo "$a has ".$count." numbers of vowels";
	}
}
echo "$a has ".$count." numbers of vowels";

?>