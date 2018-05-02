<?php
$username=$_POST['user'];
$password=$_POST['pass'];
$conn=mysqli_connect("localhost","root","","db1");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//mysqli_select_db(db1);
$res=mysqli_query($conn,"select * from users where username='$username' and password='$password'");
//$row=mysqli_fetch_array(res);
$row = $res->fetch_assoc();
if ($row['username']==$username and $row['password']==$password) {
	echo 'login successfull';
	header("Location:testpage2.php");
} 
else {
echo	'login unsuccessfull';
header("Location:index.php");
}
?>