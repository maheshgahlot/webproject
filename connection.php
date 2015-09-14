<?php
$host="localhost";
$uname="root";
$pass="";
$database = "project";
	
$connection=mysql_connect($host,$uname,$pass) or 
die("Database Connection Failed");

$selectdb=mysql_select_db($database) or 
die("Database could not be selected");	

$result=mysql_select_db($database) or 
die("database cannot be selected");

@session_start();
set_time_limit(0);
?>