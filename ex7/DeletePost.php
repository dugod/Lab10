<?php 
	$mysqli = new mysqli("mysql.eecs.ku.edu", "d053v574", "heev3eeF", 
	"d053v574"); 
		
	if ($mysqli->connect_errno) { 
		printf("Connect failed: %s\n", $mysqli->connect_error); 
		exit(); 
	} 
			
	$list = $_POST['list'];
	if (isset($list)) {
		foreach ($list as $id) {
			$delete = "DELETE FROM Posts WHERE post_id='$id'";
			if ($mysqli->query($delete) === TRUE) {
				echo "You deleted Post ID #" . "$id" . "<br>";
			}
				
		}
	}
	
	$mysqli->close(); 
?>
	