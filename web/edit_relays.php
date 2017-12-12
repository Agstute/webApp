<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);
require_once("db_functions.php");
// master_tb has these columns

//require_once('db_functions.php'); // it has two functions fetch_data($row_num, $col) and insert_func.php
?>

<!doctype html>
<html lang="en">
<!doctype html>

<html lang="en">
<head>
<?php require_once("app_struct/head.php");?>
<!--<meta http-equiv="Refresh" content="1">-->
<title>Edit Relays</title>

<script>	
function getSettings(relay_name_id, relay_id, relay_on_id, relay_off_id) {

	var cname = relay_name_id +"="
//alert(cname)
	var option = document.getElementById(relay_name_id).value
//alert(option)
	document.cookie = cname + option // pass this cookie value to php
//alert(document.cookie)	

	var cname = relay_id +"="
//alert(cname)
	var option = document.getElementById(relay_id).value
//alert(option)
	document.cookie = cname + option // pass this cookie value to php
//alert(document.cookie)	

	var cname = relay_on_id +"="
//alert(cname)
	var option = document.getElementById(relay_on_id).value
//alert(option)
	document.cookie = cname + option // pass this cookie value to php
//alert(document.cookie)	

	var cname = relay_off_id +"="
//alert(cname)
	var option = document.getElementById(relay_off_id).value
//alert(option)
	document.cookie = cname + option // pass this cookie value to php
//alert(document.cookie)	

	location.reload(0)
	refresh()
}
function refresh() {
	location.reload(0)
}
</script>
	
<style>
button {width: 100%; height: auto}
input {width: 100%; height: auto}
</style>	

</head>

<body id='body' style='background:perple'>
<div id="content_div">
	<h1>Edit Relays</h1>
<p style='margin: 0; border: 0; text-align: center; background:white'>Edit Relays</p>
<div id='assigment_wrapper' style='width: 100%; height: 100;background:white; margin: 0; padding:0'>
<br/>
<br/>

<div id='inner_div' style='width: 90%; height: 500px; margin: auto; background:white'>



<table style='width: 90%;float: right'>
  <tr>
    <th>Name</th>
    <th>Relay</th> 
    <th>On</th>
    <th>Off</th>
    <th>Set</th>
  </tr>
<?php 
//$row_num=1;
$relay_name="relay_name";
$relay="relay";
$relay_on="relay_on";
$relay_off="relay_off";

$table= "relays_tb";

$totalRows=4;
for ($k=1; $k<$totalRows; $k++) {

  echo "<tr>";
    echo "<td style='width: 20%; border: 1px solid gray'><input id='relay_name_".$k."' type='text' value='".$a=fetch_data($table, $k, $relay_name)."'/></td>";
    echo "<td style='width: 20%; border: 1px solid gray'><input id='relay_".$k."' type='text' value='".$a=fetch_data($table, $k, $relay)."'/></td> ";
    echo "<td style='width: 20%; border: 1px solid gray'><input id='relay_on_".$k."' type='text' value='".$a=fetch_data($table, $k, $relay_on)."'/></td>";
    echo "<td style='width: 20%; border: 1px solid gray'><input id='relay_off_".$k."' type='text' value='".$a=fetch_data($table, $k, $relay_off)."'/></td>";
    echo "<td style='width: 20%; border: 1px solid gray'><button onclick='getSettings(`relay_name_".$k."`, `relay_".$k."`, `relay_on_".$k."`, `relay_off_".$k."`)'>Set</button></td>";
  echo "</tr>";
} //for 
?>
</table>


<?php
// insert/update db 
echo "<br/>";
for ($i=1; $i<$totalRows; $i++) {
	$cookie_name="sensor_".$i;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';

	$cookie_name="relay_name_".$i;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';
	$relay_name=$_COOKIE[$cookie_name];
		//echo "cookie relay_$i ".$input.'-';
		
	$cookie_name="relay_".$i;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';
	$relay=$_COOKIE[$cookie_name];
		//echo "cookie relay_$i ".$input.'-';
		
	$cookie_name="relay_on_".$i;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';
	$relay_on=$_COOKIE[$cookie_name];
		//echo "cookie relay_$i ".$input.'-';
		
	$cookie_name="relay_off_".$i;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';
	$relay_off=$_COOKIE[$cookie_name];
		//echo "cookie relay_$i ".$input.'-';


	
	$sensor=$threshold=$timer_name=$timer=$timer_on=$timer_off=$control=$program=$schedule="-";
	
	// The order of tb columns are // sensor, threshold, relay_name, relay, relay_on, relay_off, timer_name, timer, timer_on, timer_off, control, program, schedule
	//The funcuion argument is the same order
	insert_2_db($table, $sensor, $threshold, $relay_name, $relay, $relay_on, $relay_off, $timer_name, $timer, $timer_on, $timer_off, $control, $program, $schedule, $i);
	
	echo "<br/>";
} // for ($i=1; $i<$totalRows; $i++)
		
		
	echo "</div>"; // id='assigment_wrapper 
	echo "</div>"; // End id="content_div"
?>
<!-- DO NOT REMOVE -->
</body>
</html>

