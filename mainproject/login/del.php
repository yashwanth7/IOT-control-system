<?php

$conn=mysqli_connect("localhost","root","","db1");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$username=$_POST['user'];
echo $username;
$sql="SELECT vehicles FROM users WHERE VNAME='$username' ";
$query = mysqli_query($conn,"SELECT * FROM vehicles WHERE VNAME='$username' ");
$sql1="delete from vehicles where VNAME='$username' ";

//$sql = "INSERT INTO users (username, password)VALUES ('$username','$password')";
	$row=mysqli_query($conn, $sql1);
	//echo $row['password'];
	if(mysqli_query($conn,$sql1) && mysqli_num_rows($query) != 0)
	{
		echo 'succesully delete';
		header("Location:vregadmin.php");
	}
	else
	{
		echo 'no such username exits ';
		header("Location:delpage.php");

	}
?>