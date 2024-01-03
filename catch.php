<?php

$first_name=$_REQUEST['fnm'];
$last_name=$_REQUEST['lnm'];
$address=$_REQUEST['add'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$mobile_no=$_REQUEST['mob_no'];
$semester=$_REQUEST['sem'];
$division=$_REQUEST['div'];

echo "<h1><center>PERSONAL DETAILS</center></h1>";
echo "<table cellpadding=10 cellspacing=10 border=5 bordercolor=blue align=center>";

echo "<tr>" ;
echo "<td><label> FIRST NAME :</label></td>";
echo "<td>$first_name</td>";
echo "</tr>";

echo "<tr>" ;
echo "<td><label> LAST NAME :</label></td>";
echo "<td>$last_name</td>";
echo "</tr>";

echo "<tr>" ;
echo "<td><label> ADDRESS :</label></td>";
echo "<td>$address</td>";
echo "</tr>";

echo "<tr>" ;
echo "<td><label> CITY :</label></td>";
echo "<td>$city</td>";
echo "</tr>";

echo "<tr>" ;
echo "<td><label> STATE :</label></td>";
echo "<td>$state</td>";
echo "</tr>";

echo "<tr>" ;
echo "<td><label> MOBILE NO. :</label></td>";
echo "<td>$mobile_no</td>";
echo "</tr>";

echo "<tr>" ;
echo "<td><label> SEMESTER :</label></td>";
echo "<td>$semester</td>";
echo "</tr>";

echo "<tr>" ;
echo "<td><label> DIVISION :</label></td>";
echo "<td>$division</td>";
echo "</tr>";
echo "</table>";
?>