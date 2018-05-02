<?php
$username=$_POST['user'];
$conn=mysqli_connect("localhost","root","","db1");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//mysqli_select_db(db1);
$sq="select * from vehicles where VNAME='$username' ";
$res=mysqli_query($conn, $sq);

if (mysqli_query($conn, $sq) && mysqli_num_rows($res) != 0) {
	$r=mysqli_query($conn, $sq);
	$row = mysqli_fetch_assoc( $r);
	$rnum=$row['RNUM'];
	$emer=$row['EMER'];
	$sql = "INSERT INTO curv (RFID,VNAME,EMER,TIME1)VALUES ('$rnum','$username','$emer',now())";
	mysqli_query($conn, $sql);
    echo "New record created successfully";
    header("Location: rfid.php");
} 

else {
	$sql = "INSERT INTO curv (VNAME,TIME1)VALUES ('$username',now())";
	if(mysqli_query($conn, $sql))
	{
		echo "all set";
		header("Location: rfid.php");
	}
	else
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

mysqli_close($conn);

?>