<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="container">
	<img src="logo2.png" alt="Poza indisponibila">
	<br>
	<div class="pick">
	<?php
	if(isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	} else {
		echo "Your are not logged in!";
	}
?>
</div>
<form action="login.php" method="POST">
<div class="form-input">
<input type="text" name="uid" placeholder="User Name"><br>
</div>
<div class="form-input">
<input type="password" name="pwd" placeholder="Password"><br> 
</div>
<div class="form-input">
<button type="submit">LOGIN</button>
</div>
<br>
</form>
<form action="signup.php" method="POST">
<div class="form-input">
<input type="text" name="firstname" placeholder="First Name"><br>
</div>
<div class="form-input">
<input type="text" name="lastname" placeholder="Last Name"><br>
</div>
<div class="form-input">
<input type="text" name="uid" placeholder="User Name"><br>
</div>
<div class="form-input">
<input type="password" name="pwd" placeholder="Password"><br> 
</div>
<div class="form-input">
<button type="submit">SIGN UP</button>
</div>
</form>
<br>
<form action="logout.php">
<div class="form-input">
<button type="submit">LOG OUT</button>
</div>
</form>
</div>
</body>
</html>