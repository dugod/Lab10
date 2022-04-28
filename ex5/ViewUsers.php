<?php 
$mysqli = new mysqli("mysql.eecs.ku.edu", "d053v574", "heev3eeF", 
"d053v574"); 
 
/* check connection */ 
if ($mysqli->connect_errno) { 
    printf("Connect failed: %s\n", $mysqli->connect_error); 
    exit(); 
} 

	$query = "SELECT user_id FROM Users";
	$result = $mysqli->query($query);
	
	echo "<table>";
	echo "<table border=\"1\">";
	echo "<tr> Users </tr>";
	while($row = $result->fetch_assoc()) {
		echo "<tr><td>" . htmlspecialchars($row['user_id']). "</td></tr>";
	}
	echo "</table>";

$mysqli->close(); 
?>
