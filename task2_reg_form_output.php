<?php
$unm=$_REQUEST['unm'];
$psw=$_REQUEST['psw'];
$name=$_REQUEST['name'];
$add=$_REQUEST['add'];
$country=$_REQUEST['country'];
$zip=$_REQUEST['zip'];
$email=$_REQUEST['email'];
$gender=$_REQUEST['gender'];
$eng=$_REQUEST['eng'];
$noneng=$_REQUEST['noneng'];
$about=$_REQUEST['about'];

echo "<table cellpadding=6 cellspacing=6 border=3 align=center width=500px height=500>";
echo "<tr>";
echo "<td><label>Username:</label></td>";
echo "<td>$unm</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>Password:</label></td>";
echo "<td>$psw</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>Name:</label></td>";
echo "<td>$name</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>Address:</label></td>";
echo "<td>$add</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>Country:</label></td>";
echo "<td>$country</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>Username:</label></td>";
echo "<td>$unm</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>Zip Code:</label></td>";
echo "<td>$zip</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>Email:</label></td>";
echo "<td>$email</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>Sex:</label></td>";
echo "<td>$gender</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>Language:</label></td>";
echo "<td>$eng"."  "."$noneng</td>";
echo "</tr>";

echo "<tr>";
echo "<td><label>About:</label></td>";
echo "<td>$about</td>";
echo "</tr>";

?>