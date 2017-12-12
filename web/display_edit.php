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
<!doctype html>

<html lang="en">
<head>
<?php require_once("app_struct/head.php");?>
<!--<meta http-equiv="Refresh" content="1">-->
<title>Display Edit</title>

<script>	
</script>
	
<style>
.span_left {float: left; margin: 0 0 10% 0; height: 5%}
.relay_name {float: right; width: 70%; height:7%; background: beige}

</style>	

</head>

<body id='body' style='background:perple'>
<div id="content_div">
	<h1>Edit</h1>
<div id='assigment_wrapper' style='width: 100%; height: 100;background:white; margin: 0; padding:0'>
<br/>
<br/>
<div id='inner_div' style='width: 70%; height: 500px; margin: auto; background:azure'>





<?php
$k=1;
$table="master_tb";
$relay_name="relay_name";
$relay="relay";
$control="control";
$sensor="sensor";
$timer="timer";
$program="program";
$schedule="schedule";
echo "<span class='span_left'>Relay Name</span><input type='text' class='relay_name' value='".$a=fetch_data($table, $k, $relay_name)."'/><br/>";

echo "<br/><br/><br/>";
echo "<input type='text' value='".$a=fetch_data($table, $k, $control)."' style='float: left; width: 20%; height:7%; background: beige'/><input type='text' value='".$a=fetch_data($table, $k, $relay)."' style='float: right; width: 30%; height:7%; background: beige' /><br/>";
echo "<br/><br/><br/>";
echo "<span style='text-align: left;'>Sensor</span><input type='text'  value='".$a=fetch_data($table, $k, $sensor)."' style='float: right; width: 10%; height: auto; background: beige' />";
echo "<br/>";
echo "<span style='text-align: left;'>Timer</span><input type='text' value='".$a=fetch_data($table, $k, $timer)."' style='float: right; width: 10%; height: auto; background: beige' />";
echo "<br/><br/><br/><br/>";
echo "<span style='float: left'>Program</span> <input type='text' value='".$a=fetch_data($table, $k, $program)."' style='float: right; width: 70%; height:7%; background: beige'/>";
echo "<br/><br/><br/>";
echo "<input type='text' value='".$a=fetch_data($table, $k, $schedule)."' style='float: left; width: 40%; height:7%; background: beige'/>";
echo "<br/><br/><br/>";
?>


<div style='width: 100%; height:auto;background: grey'>
<table  style='width: 100%; border: 1px solid grey'>
  <tr>
    <th>
    </th>
  </tr>
  <tr>
    <td>
    </td>
  </tr>

  <tr>
    <td>
    </td>
  </tr>
</div>





</div><!--id='inner_div'-->
</div><!-- id='assigment_wrapper'-->


</div> <!-- End id="content_div"-->




<!-- DO NOT REMOVE -->
</body>
</html>

