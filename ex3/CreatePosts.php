<?php 
$mysqli = new mysqli("mysql.eecs.ku.edu", "d053v574", "heev3eeF", 
"d053v574"); 
 
/* check connection */ 
if ($mysqli->connect_errno) { 
    printf("Connect failed: %s\n", $mysqli->connect_error); 
    exit(); 
} 

	$username = $_POST['username'];
	$post = $_POST['post'];
	
	$userExist = "SELECT user_id FROM Users WHERE user_id='$username'";
	$userValidation = $mysqli->query($userExist);
	$savedPost = "INSERT INTO Posts (content, author_id)
	VALUES ('$post', '$username')";
	
	if ($userValidation->num_rows == 0) {
		echo "User does not exist!";
	}
	else if ($post == null) {
		echo "A text field was left blank!";
	}
	else if ($mysqli->query($savedPost) === TRUE) {
		echo "Post was successfully saved!";
	}
	else {
		echo "Error.";
	}
	

$mysqli->close(); 
?>
