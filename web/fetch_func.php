<?php

function fetch_data($user_settings, $row_num) {
// make a connection to mysql using PDO
$servername="localhost";
$db_username="pi";
$db_password="mamamia";

$db_name="agstatus_db";
$table="master_tb";

// make a connection to mysql using PDO
$conn = new PDO("mysql:host=$servername;dbname=$db_name", $db_username, $db_password);

// get the last row
$lastID=$conn->query("SELECT row_id FROM $table ORDER BY row_id DESC LIMIT 1")->fetchColumn();
//echo "lastID=".$lastID."<br/>";

$value=$conn->query("SELECT $user_settings FROM $table WHERE row_id=$row_num")->fetchColumn();

return $value;
}
?>