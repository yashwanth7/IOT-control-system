<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
	Login Page
    </title>
<link rel="stylesheet" type=text/css href="style1.css">
<link href="site.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
	<header>
		SMART TRAFFIC CONTROL SYSTEM
	</header>
<div id="formm">
    <form action="process.php" method="POST">
    
<!––our login animation start from here-->     
<h2>
    <span
     class="txt-rotate";
     data-period="2000";
     data-rotate='[ "Login Form"]'></span>
    <script src="myscripts.js"></script>

    </h2>
    <!––this is for login animation--> 

      <img src="logo.jpg" alt="logo" class="logo">

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container1" style="background-color:#f1f1f1">
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    
 </div>
</div>
</body>
</html>