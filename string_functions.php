<?php

//STING FUNCTIONS:

//1.strlen
$a=strlen("Hello World !!!");
echo "Total words of 'Hello World !!!' =".$a;
echo "<br>";
echo "<br>";

//2.strpos
$b=strpos("Hello World .... Good Morning !!!" , "Morning");
echo "strpos('Hello World .... Good Morning !!!" , "Morning') = ".$b;
echo "<br>";
echo "<br>";

//3.str_replace($search , $replace_word , $word)
$c=str_replace("World" , "Universe" ,"Hello World !!!");
echo "str_replace world with universe = " . $c;
echo "<br>";
echo "<br>";

//4.substr($string , $start , $length) "index starting value is 0 for this":
$d=substr("Hello World !!!" , 2 , 5);
echo "slice of 'Hello World !!!' = ".$d;
echo "<br>";
echo "<br>";

//5.strtolower($string)
$e=strtolower("HELLO GIRLS .... GOOD MORNING");
echo "Convert to lower case 'HELLO GIRLS .... GOOD MORNING' = ".$e;
echo "<br>";
echo "<br>";

//6.strtoupper($string)
$f=strtoupper("hello girls ... good morning");
echo "Convert to upper case 'hello girls ... good morning' = ".$f;
echo "<br>";
echo "<br>";

//7.ucfirst($string)
$g=ucfirst("hello girls");
echo "Convert firt letter of string to capital = ".$g;
echo "<br>";
echo "<br>";

//8.strrev($string)
$h=strrev("Hello World !!!");
echo "Reverse string 'Hello World !!!' = ".$h;
echo "<br>";
echo "<br>";

//9.trim($string)
$i=trim("***Hello World***" , "*");
echo "Removes whitespace or character from beginning and end '***Hello World***' = ".$i;
?>