<html>
<body>
<style>
.bg
{
	background-color:black;
	border-color:white;
	color:red;
	border-radius:5px;
	font-family: DotsAllForNow;
}
@font-face 
{
    font-family: DotsAllForNow;
    src: url(DotsAllForNow.ttf);
}
</style>
</body>
</html>

<?php

header('refresh:1');

echo "<table cellspacing=5 cellpadding=5 border=2 align=center class=bg >";
echo "<tr>";
	$a=date_default_timezone_set("Asia/Calcutta");
	$b=date("d");
	echo "<td align=center>";
		echo $b."<br>";
		echo "date";
	echo "</td>";
	
	$c=date("m");
	echo "<td align=center>";
		echo $c."<br>";
		echo "month";
	echo "</td>";
	
	$d=date("y");
	echo "<td align=center>";
		echo $d."<br>";
		echo "year";
	echo "</td>";
echo "</tr>";

echo "<tr>";
	$a=date_default_timezone_set("Asia/Calcutta");
	$x=date("H");
	echo "<td align=center>";
		echo $x."<br>";
		echo "Hours";
	echo "</td>";
	
	$y=date("i");
	echo "<td align=center>";
		echo $y."<br>";
		echo "Minute";
	echo "</td>";
	
	$z=date("s");
	echo "<td align=center>";
		echo $z."<br>";
		echo "Second";
	echo "</td>";
	
echo "</tr>";

echo "<tr>";
	$m=date("D");
	echo "<td colspan=3 align=center>";
		echo "Day : ".$m."<br>";	
	echo "</td>";
echo "</tr>";	

echo "</table>";
?>