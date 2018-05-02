        <?php
$conn=mysqli_connect("localhost","root","","db1");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = "select * from curv where EMER='0'";
$selectRes=mysqli_query($conn, $sql)
?>
<?php include "headerinclude1.php" ?>
<table border="2" align="center" colspan="5px">
  <br/><br/><br/><br/><br/><br/>
  <br/>
  <thead>
    <tr>
      <th>RFID NUMBER</th>
      <th>VEHICLE NAME</th>
      <th>TIME OF REGISTRATION</th>
      <th>EMERGENCY</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysqli_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
          echo "<tr>
          <td>{$row['RFID']}</td>
          <td>{$row['VNAME']}</td>
          <td>{$row['TIME1']}</td>
          <td>{$row['EMER']}</td>
          \n";
        }
      }
    ?>
  </tbody>
</table>
    </body>
</html>