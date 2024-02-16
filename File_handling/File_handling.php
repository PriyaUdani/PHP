<?php
//opening file
$myfile=fopen("example.txt","r");

//reading the containt of file
echo fgets($myfile);

echo "<br>";

//overwriting in same file
$myfile=fopen("example.txt","rw");
$write_file="Have a good day girls";
fwrite($myfile,$write_file);
echo fgets($myfile);

echo "<br>";

//adding content to same file
$myfile=fopen("example.txt","rw");
$add="appended content";
file_put_contents("example.txt",$add,FILE_APPEND);

echo "<br>";

//Check file 
if(file_exists("example.txt"))
{
	echo "the file exists";
}
else{
	echo "the file dosen't exists";
}
//closing file
fclose($myfile)
?>