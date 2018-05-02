<?php
$vname=$_POST['vname'];
$rfid=$_POST['RFID'];
$emer=$_POST['emer'];
$conn=mysqli_connect("localhost","root","","db1");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = "INSERT INTO VEHICLES (RNUM, VNAME,TIME1,EMER)VALUES ('$rfid','$vname',now(),'$emer')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location: testpage2.php");
} 

else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>