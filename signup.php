  <?php
	session_start();
	include 'dbh.php';
	
	$first = $_POST['firstname'];
	$last = $_POST['lastname'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	if($first) {
	$sql = "INSERT INTO user (firstname, lastname, uid, pwd)
	VALUES ('$first', '$last', '$uid', '$pwd')";
	$result = mysqli_query($conn,$sql);
	}
		
		
	header("Location: index.php");
  