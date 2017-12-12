<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);
require_once("db_functions.php");
// master_tb has these columns
// sensor, threshold, relay_name, relay, relay_on, relay_off, timer_name, timer, timer_on, timer_off
//require_once('db_functions.php'); // it has two functions fetch_data($row_num, $col) and insert_func.php
?>

<!doctype html>

<html lang="en">
<head>
<?php require_once("app_struct/head.php");?>
<!--<meta http-equiv="Refresh" content="1">-->
<title>Add</title>

<script>	
function getSettings(relay_name_id, relay_id, control_id, sensor_id, timer_id, program_id, schedule_id) {

	var cname = relay_name_id +"="
//alert(cname)
	var value = document.getElementById(relay_name_id).value
//alert(value)
	document.cookie = cname + value // pass this cookie value to php
//alert(document.cookie)	

	var cname = relay_id +"="
//alert(cname)
	var value = document.getElementById(relay_id).value
//alert(value)
	document.cookie = cname + value // pass this cookie value to php
//alert(document.cookie)	

	var cname = control_id +"="
//alert(cname)
	var value = document.getElementById(control_id).value
//alert(value)
	document.cookie = cname + value // pass this cookie value to php
//alert(document.cookie)	

	var cname = sensor_id +"="
//alert(cname)
	var value = document.getElementById(sensor_id).value
//alert(value)
	document.cookie = cname + value // pass this cookie value to php
//alert(document.cookie)	

	var cname = timer_id +"="
//alert(cname)
	var value = document.getElementById(timer_id).value
//alert(value)
	document.cookie = cname + value // pass this cookie value to php
//alert(document.cookie)

	var cname = program_id +"="
//alert(cname)
	var value = document.getElementById(program_id).value
//alert(value)
	document.cookie = cname + value // pass this cookie value to php
//alert(document.cookie)

	var cname = schedule_id +"="
//alert(cname)
	var value = document.getElementById(schedule_id).value
//alert(value)
	document.cookie = cname + value // pass this cookie value to php
//alert(document.cookie)


	location.reload(0)
	refresh()
}
function refresh() {
	location.reload(0)
}
</script>
	
<style>
.span_left {float: left; margin: 0 0 10% 0; height: 5%}
.relay_name {float: right; width: 70%; height:7%; background: beige}
button {width: 100%; height: 40px; margin: 0; padding: 0}
</style>	

</head>

<body id='body' style='background:perple'>
<div id="content_div">
	<h1>Add</h1>
<div id='assigment_wrapper' style='width: 100%; height: 100;background:white; margin: 0; padding:0'>
<br/>
<br/>
<div id='inner_div' style='width: 70%; height: 500px; margin: auto; background:azure'>





<?php
$k=1;
$relay_name="relay_name";
$relay="relay";
$control="control";
$sensor="sensor";
$timer="timer";
$program="program";
$schedule="schedule";
$master_tb="master_tb";
$relays_tb="relays_tb";

echo $a=fetch_data($relays_tb, $k, $relay_name);
echo "<span class='span_left'>Relay Name</span><input id='relay_name_".$k."' type='text' class='relay_name' value='".$a=fetch_data($master_tb, $k, $relay_name)."'/><br/>";

echo "<br/><br/><br/>";
echo "<input id='control_".$k."' type='text' value='".$a=fetch_data($master_tb, $k, $control)."' style='float: left; width: 20%; height:7%; background: beige'/><input  id='relay_".$k."' type='text' value='".$a=fetch_data($relays_tb, $k, $relay)."' style='float: right; width: 30%; height:7%; background: beige' /><br/>";
echo "<br/><br/><br/>";
echo "<span style='text-align: left;'>Sensor</span><input  id='sensor_".$k."' type='text'  value='".$a=fetch_data($master_tb, $k, $sensor)."' style='float: right; width: 10%; height: auto; background: beige' />";
echo "<br/>";
echo "<span style='text-align: left;'>Timer</span><input id='timer_".$k."' type='text' value='".$a=fetch_data($master_tb, $k, $timer)."' style='float: right; width: 10%; height: auto; background: beige' />";
echo "<br/><br/><br/><br/>";
echo "<span style='float: left'>Program</span> <input id='program_".$k."' type='text' value='".$a=fetch_data($master_tb, $k, $program)."' style='float: right; width: 70%; height:7%; background: beige'/>";
echo "<br/><br/><br/>";
echo "<input id='schedule_".$k."' type='text' value='".$a=fetch_data($master_tb, $k, $schedule)."' style='float: left; width: 40%; height:7%; background: beige'/>";
echo "<br/><br/><br/>";
echo "<div style='width: 100%; height:auto;background: grey'>";
//put submit button here
/*
echo "<button  onclick='getSettings(`relay_name_".$k."`, `relay_".$k."`, `relay_on_".$k."`, `relay_off_".$k."`)'>Set</button>";
echo "</div> // <div style='width: 100%; height:20px; background: grey'>

// insert/update db 
*/
echo "<br/>";
$k=1;
	$cookie_name="sensor_".$k;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';
	$sensor=$_COOKIE[$cookie_name];
		//echo "cookie relay_$k ".$input.'-';
		
	$cookie_name="relay_name_".$k;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';
	$relay_name=$_COOKIE[$cookie_name];
		//echo "cookie relay_$k ".$input.'-';
		
	$cookie_name="relay_".$k;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';
	$relay=$_COOKIE[$cookie_name];
		//echo "cookie relay_$k ".$input.'-';
		
	$cookie_name="control_".$k;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';
	$control=$_COOKIE[$cookie_name];
		//echo "cookie relay_$k ".$input.'-';
				
	$cookie_name="timer_".$k;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';
	$timer=$_COOKIE[$cookie_name];
		//echo "cookie relay_$k ".$input.'-';
		
	$cookie_name="program_".$k;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';
	$program=$_COOKIE[$cookie_name];
		//echo "cookie relay_$k ".$input.'-';
		
	$cookie_name="schedule_".$k;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';
	$schedule=$_COOKIE[$cookie_name];
		//echo "cookie relay_$k ".$input.'-';


	
	$threshold=$timer_name=$timer=$timer_on=$timer_off=$relay_on=$relay_off="-";
	//insert_2_db($sensor, $threshold, $relay_name, $relay, $relay_on, $relay_off, $timer_name, $timer, $timer_on, $timer_off, $control, $program, $schedule, $k);
	
	echo "<br/>";
?>

</div><!--id='inner_div'-->
</div><!-- id='assigment_wrapper'-->


</div> <!-- End id="content_div"-->




<!-- DO NOT REMOVE -->
</body>
</html>

