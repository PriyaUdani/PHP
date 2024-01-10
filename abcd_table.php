<?php

$k=65;

echo "<table cellpadding=5 cellspacing=5 border=5 align=center>";
for($i=1;$i<=7;$i++)
{
	
	echo "<tr>";
	for($j=1;$j<=4;$j++)
	{
		echo "<td>";
		echo chr($k);
		
		if($k<90)
		{
			$k++;
		}
		else
		{
			break;
		}
		echo "</td>";
	}
	echo "<br>";
}
echo "</tr>";
echo "</table>";
?>