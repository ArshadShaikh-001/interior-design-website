<?php
$servername="localhost";
$username="root";
$password="";
$database="interior";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
	die("Error Detected".mysql);
}
else
{
	echo "Connected SuccessFully";
}
?>