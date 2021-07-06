<?php
$email=$_POST['email'];
$roomid=$_POST['roomid'];
$seccode=$_POST['seccode'];
$conn= mysqli_connect('localhost','root','','roomiee');
if($conn)
{
	$query1="INSERT INTO `users`(`email`, `roomid`, `seccode`, `adminstatus`) VALUES ('$email','$roomid','$seccode',1)";
	$result=mysqli_query($conn, $query1);
	if($result)
	{
		echo "inserted";
	}
	else{
		echo "not inserted";
	}
}
else{
	echo "not connected";
}
?>