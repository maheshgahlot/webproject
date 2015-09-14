<?php
    
 $host='localhost';
$uname='root';
$pass="";
$database = 'project';
	
$conn=mysql_connect($host,$uname,$pass) or 
die("Database Connection Failed");

$selectdb=mysql_select_db($database) or 
die("Database could not be selected");
$name=$_POST['name'];
$enroll=$_POST['enroll'];
$radio=$_POST['radio'];
$no=$_POST['no'];
$email=$_POST['email'];
$branch=$_POST['branch'];
if(!$_POST['submit']){
	echo"please fill out the form";
    header('Location: proj.html');
}
else{
$quer=mysql_query("INSERT INTO stu ('id','name','enroll','radio','phone','email','branch') VALUES('NULL','$name','$enroll', '$radio','$no','$email','$branch')") or die(mysql_error());
 echo"sucessful";
 header('Location: proj.html');
}



?>			 
				 
				 