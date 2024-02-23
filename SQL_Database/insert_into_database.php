<?php
echo $fnm=$_REQUEST['fname'];
echo $lnm=$_REQUEST['lname'];
echo $city=$_REQUEST['city'];

$cn=mysqli_connect("localhost","root","","b1");

$q1="INSERT INTO `student_detail`(`first_name`, `last_name`, `city`) VALUES ('$fnm','$lnm','$city')";

$execute_q1=mysqli_query($cn,$q1);

echo "<br>";

if($execute_q1>=1)
{
	echo "Data inserted";
}
else
{
	echo "Data is not inserted";
}
?>