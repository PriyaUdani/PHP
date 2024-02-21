<html>
<head>
<body>
<form action="" method="get">
	Enter the year<input type="text" name="year"><br>
	<input type="submit" name="submit">
</form>
</body>
</head>
</html>

<?php

$year=$_REQUEST['year'];

	if($year % 2 == 0)
	{
		echo $year;
		echo "<br>";
		echo "Entered year is a <b>leap year</b>";
	}
	else
	{
		echo $year;
		echo "<br>";
		echo "Entered year is <b>not a leap year </b> ";
	}
?>