<?php 
$mysqli = new mysqli("mysql.eecs.ku.edu", "d053v574", "heev3eeF", 
"d053v574"); 
 
/* check connection */ 
if ($mysqli->connect_errno) { 
    printf("Connect failed: %s\n", $mysqli->connect_error); 
    exit(); 
} 

	$username = $_POST['username'];
	if ($username == null) {
		printf("Text field left blank. User not added to database.");
	}
	
	$sql = "INSERT INTO Users (user_id)
	VALUES ('$username')";
	$dupe = "SELECT user_id FROM Users WHERE user_id='$username'";
	$dupeCount = $mysqli->query($dupe);
	
	if ($dupeCount->num_rows > 0) {
		echo "User already exists in database!";
	}
	else if ($mysqli->query($sql) === TRUE) {
		echo "New user added to database!";
	}
	else {
		echo "Error!";
	}

$mysqli->close(); 
?>