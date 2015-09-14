<?php
$host='localhost';
$uname='root';
$pass="";
$database = 'test1';
	
$conn=mysql_connect($host,$uname,$pass) or 
die("Database Connection Failed");

$selectdb=mysql_select_db($database) or 
die("Database could not be selected");	

?>