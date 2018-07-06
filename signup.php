
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up</title>
<link href="css/signup.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="logo">
  <div id="header">
  <div id="logo"><img src="Capture.PNG" width="50" height="50"></div>
  
  <ul>
  <!--<li><a href="login.php">Login</a></li> -->
 <!-- <li><a href="#">Sign Up</a></li> -->
 <!-- <li><a href="toys.php">Toys</a></li>
  <li><a href="fashion.php">Fashion</a></li>
  <li><a href="electronics.php">Electronics</a></li> -->
  <li><a href="home.php">Home</a></li>
 </ul>
  
</div>

<div id="main"></div>
</div>

<form action="signupdatabase.php">
  <div class="container">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}">

 <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required pattern="[a-zA-Z0-9@]{3,10}">


    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    
    <input type="checkbox" checked="checked"> Remember me
    <p>By creating an account you agree to our <a href="termsnconditions.php">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button"  class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>