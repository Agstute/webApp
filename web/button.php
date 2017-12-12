<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);
require_once("db_functions.php");
// master_tb has these columns
// sensor, threshold, relay_name, relay, relay_on, relay_off, timer_name, timer, timer_on, timer_off
//require_once('db_functions.php'); // it has two functions fetch_data($row_num, $col) and insert_func()
?>

<!doctype html>

<html lang="en">
<head>
<?php require_once("app_struct/head.php");?>
<!--<meta http-equiv="Refresh" content="10">-->
<title>Display Edit</title>

<script>	
var init=0
function getSettings(row, relay_name_id, relay_id, control_id, sensor_id, timer_id, program_id, schedule_id) { //, relay_id, control_id, sensor_id, timer_id, program_id, schedule_id) {
	if (row<17) row+=1
	var row_num = row+1
alert(row_num)
/*	var value = document.getElementById(relay_name_id).value
//alert(value)
	document.cookie = cname + value // pass this cookie value to php
//alert(document.cookie)
*/
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

	
	location.reload(1)
	//refresh()
	/*
	setTimeout(function() {
		refresh()
	}, 5000)
	*/
}
</script>
	
<style>
.span_left {float: left; margin: 0 0 10% 0; height: 5%}
.relay_name {float: right; width: 70%; height:7%; background: beige}
button {width: 100%; height: 40px; margin: 0; padding: 0}
</style>	

</head>

<body id='body' style='background:perple' >
<div id="content_div">
	<h1>Edit</h1>
<div id='assigment_wrapper' style='width: 100%; height: 100;background:white; margin: 0; padding:0'>
<br/>
<br/>
<div id='inner_div' style='width: 70%; height: 500px; margin: auto; background:white'>





<?php
$k=3;
$relay_name="relay_name";
$relay="relay";
$control="control";
$sensor="sensor";
$timer="timer";
$program="program";
$schedule="schedule";
echo "<span class='span_left'>Relay Name</span><input id='relay_name_".$k."' type='text' class='relay_name' value='".$a=fetch_data($k, $relay_name)."'/><br/>";

echo "<br/><br/><br/>";
echo "<input id='control_".$k."' type='text' value='".$a=fetch_data($k, $control)."' style='float: left; width: 20%; height:7%; background: beige'/><input  id='relay_".$k."' type='text' value='".$a=fetch_data($k, $relay)."' style='float: right; width: 30%; height:7%; background: beige' /><br/>";
echo "<br/><br/><br/>";
echo "<span style='text-align: left;'>Sensor</span><input  id='sensor_".$k."' type='text'  value='".$a=fetch_data($k, $sensor)."' style='float: right; width: 10%; height: auto; background: beige' />";
echo "<br/>";
echo "<span style='text-align: left;'>Timer</span><input id='timer_".$k."' type='text' value='".$a=fetch_data($k, $timer)."' style='float: right; width: 10%; height: auto; background: beige' />";
echo "<br/><br/><br/><br/>";
echo "<span style='float: left'>Program</span> <input id='program_".$k."' type='text' value='".$a=fetch_data($k, $program)."' style='float: right; width: 70%; height:7%; background: beige'/>";
echo "<br/><br/><br/>";
echo "<input id='schedule_".$k."' type='text' value='".$a=fetch_data($k, $schedule)."' style='float: left; width: 40%; height:7%; background: beige'/>";
echo "<br/><br/><br/>";
//echo "<div style='width: 100%; height:auto;background: grey'>";
//put submit button here
//echo "<button onmouseup='func()'>keydown</button>";

echo "<button onmousedown='getSettings(".$k.", `relay_name_".$k."`, `relay_".$k."`, `control_".$k."`, `sensor_".$k."`, `timer_".$k."`, `program_".$k."`,  `schedule_".$k."`, `schedule_".$k."`)'>Set</button>";
//relay_name_".$k."`, `relay_".$k."`, `control_".$k."`, `sensor_".$k."`, `timer_".$k."`, `program__".$k."`,  `schedule_".$k."`)'>Set</button>

// insert/update db 
echo "<br/>";
$k=1;
	
		
	$cookie_name="relay_name_".$k;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';
	$relay_name=$_COOKIE[$cookie_name];
		//echo "relay_name=".$relay_name;
		
	$cookie_name="control_".$k;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';
	$control=$_COOKIE[$cookie_name];
		//echo "control_= ".$control;
		
	$cookie_name="relay_".$k;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';
	$relay=$_COOKIE[$cookie_name];
		//echo "relay_= ".$relay;
			
	$cookie_name="sensor_".$k;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';
	$sensor=$_COOKIE[$cookie_name];
		//echo "sensor_= ".$sensor;
//-----------//	
	$cookie_name="timer_".$k;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';
	$timer=$_COOKIE[$cookie_name];
		//echo "timer_=".$timer;
		
	$cookie_name="program_".$k;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';
	$program=$_COOKIE[$cookie_name];
		//echo "program".$program;
		
	$cookie_name="schedule_".$k;
	if(empty($_COOKIE[$cookie_name])) $_COOKIE[$cookie_name]='-';
	$schedule=$_COOKIE[$cookie_name];
		//echo "schedule_= ".$schedule;


	
	$threshold=$timer_name=$timer_on=$timer_off=$relay_on=$relay_off="-";
	
	// The order of tb columns are // sensor, threshold, relay_name, relay, relay_on, relay_off, timer_name, timer, timer_on, timer_off, control, program, schedule
	//The funcuion argument is the same order
	insert_2_db($sensor, $threshold, $relay_name, $relay, $relay_on, $relay_off, $timer_name, $timer, $timer_on, $timer_off, $control, $program, $schedule, $k);
	
	echo "<br/>";
?>

</div><!--id='inner_div'-->
</div><!-- id='assigment_wrapper'-->


</div> <!-- End id="content_div"-->




<!-- DO NOT REMOVE -->
</body>
</html>

