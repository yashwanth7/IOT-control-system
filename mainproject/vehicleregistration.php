<!DOCTYPE html>
<html>
<head>
<title>
	Login Page
</title>
<link rel="stylesheet" type=text/css href="style1.css">
    <style>
        .p{
            font-family: forte;
            font-size: 30px;
            color: darkblue;
        }
    </style>
<h1><center>SMART TRAFFIC CONTROL SYSTEM</center></h1>
</head>
<body>
    <?php include 'headerinclude.php';?>
<div id="formm">
	<P class="p">Vehicle Registration</P>
	<form action="registration.php" method="POST">
		<P>vehicle name : 
		<input type="text" id="vname" name="vname" />
		</P>
		<P>Vehicle RFID number : 
		<input type="text" id="RFID" name="RFID" />
		</P>
		<P>Is Vehicle Emergency or Not : 
		<input type="text" id="emer" name="emer" />
		</P>
		<p>
		<button type="submit">Register</button>
		</p>
	</form>
</div>
	</body>
</html>
