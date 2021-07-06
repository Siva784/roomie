<?php
$email=$_POST['email'];
$roomid=$_POST['roomid'];
$seccode=$_POST['seccode'];
$conn= mysqli_connect('localhost','root','','roomiee');
if($conn)
{
	$query="SELECT `seccode` FROM `users` WHERE roomid='$roomid'";
	$result=mysqli_query($conn, $query);
	while($row=mysqli_fetch_row($result)){
		$seccode1=$row[0];
	}
	if($seccode==$seccode1){
		echo "valid user";
		$query1="INSERT INTO `users`(`email`, `roomid`, `seccode`) VALUES ('$email','$roomid','$seccode')";
	$result1=mysqli_query($conn, $query1);
	if($result1)
	{
		echo "inserted";
	}
	else{
		echo "not inserted";
	}
	}
	else{
		echo "invalid user";
	}
	
}
else{
	echo "not connected";
}
?>