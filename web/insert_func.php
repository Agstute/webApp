<?php

function insert_2_db($sensor, $threshold, $relay, $r_on, $r_off, $timer, $t_on,$t_off, $i) {
// make a connection to mysql using PDO
$servername="localhost";
$db_username="root";
$db_password="mamamia";

$db_name="agstatus_db";
$table="master_tb";

$conn = new PDO("mysql:host=$servername;dbname=$db_name", $db_username, $db_password);

// get the last row
$lastID=$conn->query("SELECT row_id FROM $table ORDER BY row_id DESC LIMIT 1")->fetchColumn();
//echo "lastID=".$lastID."<br/>";
		
	if(($lastID)!=5) {
		$sql = "INSERT INTO $table (sensor, threshold, relay, r_on, r_off, timer, t_on, t_off, dt) 
		VALUES ('$sensor', '$threshold', '$relay', '$r_on', '$r_off', '$timer', '$t_on', '$t_off', t_on now())";
		$conn->exec($sql);
	}
	else {
		$sql = "UPDATE $table SET sensor='$sensor', threshold='$threshold', relay='$relay', r_on='$r_on', r_off='$r_off', timer='$timer', t_on='$t_on', t_off='$t_off', dt=now() 
	WHERE row_id=$i";
$conn->exec($sql);
	}
} //function ends here
?>