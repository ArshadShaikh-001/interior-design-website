<?php
include 'database.php';
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
}
$sql="insert into design(name,email,comment) values('$name','$email','$comment')";
if(mysqli_query($con,$sql))
{
	echo "<script>alert('new record inserted')</script>";
}
else
{
	echo "error:".mysqli_error($con);
}
mysqli_close($con);
?>