<html>
<head>
<body>
<form action="" method="get">
	Enter radius<input type="text" name="rad"><br>
	<input type="submit" name="submit">
</form>
</body>
</head>
</html>

<?php

$r=$_REQUEST['rad'];

$pi=3.14;

$aoc=$pi*$r*$r;
echo "Area of Circle is : ".$aoc;

?>