<!DOCTYPE html>
<html>
<head>
<title>
	SIGN UP
</title>
<link rel="stylesheet" type=text/css href="style.css">

</head>
<body>
    <?php include "headerinclude1.php" ?>
<div id="formm">
	<P><b>Signup</b></P>
	<form action="signing.php" method="POST">
		<P>username : 
		<input type="text" id="user" name="user" />
		</P>
		<P>password : 
		<input type="password" id="pass" name="pass" />
		</P>
		<p>
		<input type="submit" id="btn" value="signup" />
		</p>
		<p>
			<a href="index.php">login</a>
		</p>
	</form>
</div>
	</body>
</html>
