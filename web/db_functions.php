<?php
// master_tb has these columns
// sensor, threshold, relay_name, relay, relay_on, relay_off, timer_name, timer, timer_on, timer_off
?>




<?php
// The order of tb columns are // sensor, threshold, relay_name, relay, relay_on, relay_off, timer_name, timer, timer_on, timer_off, control, program, schedule
	//The funcuion argument is the same order
function insert_2_db($table, $sensor, $threshold, $relay_name, $relay, $relay_on, $relay_off, $timer_name, $timer, $timer_on, $timer_off, $control, $program, $schedule, $k) {
// make a connection to mysql using PDO
$servername="localhost";
$db_username="pi";
$db_password="mamamia";

$db_name="agstatus_db";
$table=$table;

$conn = new PDO("mysql:host=$servername;dbname=$db_name", $db_username, $db_password);

// get the last row
$lastID=$conn->query("SELECT row_id FROM $table ORDER BY row_id DESC LIMIT 1")->fetchColumn();
//echo "lastID=".$lastID."<br/>";
		
	if(($lastID)!=5) {
		// was $sql = "INSERT INTO $table (sensor, threshold, relay, r_on, r_off, timer, t_on, t_off, dt) 
		// was VALUES ('$sensor', '$threshold', '$relay', '$r_on', '$r_off', '$timer', '$t_on', '$t_off', t_on now())";
		$sql = "INSERT INTO $table (sensor, threshold, relay_name, relay, relay_on, relay_off, timer_name, timer, timer_on, timer_off, control, program, schedule, dt) 
		VALUES ('$sensor', '$threshold', '$relay_name', '$relay', '$relay_on', '$relay_off', '$timer_name', '$timer', '$timer_on', '$timer_off', '$control', '$program', '$schedule',  now())";
		$conn->exec($sql);
	}
	else {
	// was $sql = "UPDATE $table SET sensor='$sensor', threshold='$threshold', relay='$relay', r_on='$r_on', r_off='$r_off', timer='$timer', t_on='$t_on', t_off='$t_off', dt=now() 
	// was WHERE row_id=$i";
		$sql = "UPDATE $table SET sensor='$sensor', threshold='$threshold',  relay_name='$relay_name', relay='$relay', relay_on='$relay_on', relay_off='$relay_off', timer_name='$timer_name', timer='$timer', timer_on='$timer_on', timer_off='$timer_off', control='$control', program='$program', schedule='$schedule', dt=now() WHERE row_id=$k";
		$conn->exec($sql);
	}
	$conn=null;
} //insert_2_db function ends

function fetch_data($table, $row_num, $col) {
// make a connection to mysql using PDO
$servername="localhost";
$db_username="pi";
$db_password="mamamia";

$db_name="agstatus_db";
$table=$table;


// make a connection to mysql using PDO
$conn = new PDO("mysql:host=$servername;dbname=$db_name", $db_username, $db_password);
	// get the last row
	$lastID=$conn->query("SELECT row_id FROM $table ORDER BY row_id DESC LIMIT 1")->fetchColumn();
	//echo "lastID=".$lastID."<br/>";
	// fetch value of the column
	$value=$conn->query("SELECT $col FROM $table WHERE row_id=$row_num")->fetchColumn();

	return $value;
	$conn=null;
}//fetch_data function ends
?>