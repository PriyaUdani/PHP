<html>
<head>
</body>
<style>
table
{
	float:left;
	padding:10px;
	<!--border-color:pink;-->
}
</style>
</body>
</head>
</html>
<?php

$fno=$_REQUEST['sno'];
$lno=$_REQUEST['lno'];

for($i=$fno;$i<=$lno;$i++)
{
	echo "<table cellpadding=3 cellspacing=5 border=5>";
	
	if($i%2==0)
	{
		echo "<style> table{border-color:yellow;} </style>";
	}
	else
	{
		echo "<style> table{border-color:purple;} </style>";
	}
	
	for($j=1;$j<=10;$j++)
	{
		echo "<tr>";
		//$mul=$i*$j;
		echo "<td>".$i." * ".$j." = ".($i*$j)."</td>";
		//echo "<br>";
		echo "</tr>";
		
	}
	echo "</table>";
}
?>