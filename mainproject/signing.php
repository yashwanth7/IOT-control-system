<?php
$username=$_POST['user'];
$password=$_POST['pass'];
$conn=mysqli_connect("localhost","root","","db1");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//mysqli_select_db(db1);
$sql = "INSERT INTO users (username, password)VALUES ('$username','$password')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location: index.php");
} 

else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>