<?php
$first_name=$_REQUEST['fnm'];
$last_name=$_REQUEST['lnm'];
$address=$_REQUEST['add'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$mobile_no=$_REQUEST['mob_no'];
$semester=$_REQUEST['sem'];
$division=$_REQUEST['div'];

echo "First Name=".$first_name;
echo "Last Name=".$last_name;
echo "Address=".$address;
echo "City=".$city;
echo "State=".$state;
echo "Semester=".$semester;
echo "Division=".$division;

?>