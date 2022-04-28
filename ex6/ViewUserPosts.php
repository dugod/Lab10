<?php 
$mysqli = new mysqli("mysql.eecs.ku.edu", "d053v574", "heev3eeF", 
"d053v574"); 
 
/* check connection */
if ($mysqli->connect_errno) { 
    printf("Connect failed: %s\n", $mysqli->connect_error); 
    exit(); 
} 
	$user = $_POST['users'];

	$query = "SELECT content FROM Posts WHERE author_id='$user'";
	$result = $mysqli->query($query);
	
	echo "<table>";
	echo "<table border=\"1\">";
	echo "<tr> Posts </tr>";
	while($row = $result->fetch_assoc()) {
		echo "<tr><td>" . htmlspecialchars($row['content']). "</td></tr>";
	}
	echo "</table>";

$mysqli->close(); 
?>