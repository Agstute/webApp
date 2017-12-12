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
<title>Active Relays</title>

<script>	
</script>
	
<style>
button {width: 100%; height: auto}
input {width: 100%; height: auto}
</style>	

</head>

<body id='body' style='background:perple'>
<div id="content_div">
	<h1>Active Relays</h1>
<p style='margin: 0; border: 0; text-align: center; background:white'>Active Relays</p>
<div id='assigment_wrapper' style='width: 100%; height: 100;background:white; margin: 0; padding:0'>
<br/>
<br/>

<div id='inner_div' style='width: 90%; height: 500px; margin: auto; background:white'>



<table style='width: 90%;float: right'>
  <tr>
    <th style='width: 20%; border: 0; visability: hidden'></th>
    <th>Name</td>
    <th>Relay</th> 
    <th>On</th>
    <th>Off</th>

  </tr>
<?php 
//$row_num=1;
$relay_name="relay_name";
$relay="relay";
$relay_on="relay_on";
$relay_off="relay_off";

$totalRows=4;
$table="relays_tb";
for ($k=1; $k<$totalRows; $k++) {

  echo "<tr>";
    echo "<td style='width: 20%; border: 0; visability: hidden'><input type='radio' checked  style='text-align: center' /></td>";
    echo "<td style='width: 20%; border: 1px solid gray'><input id='relay_name".$k."' type='text' value='".$a=fetch_data($table, $k, $relay_name)."'/></td> ";
    echo "<td style='width: 20%; border: 1px solid gray'><input id='relay_".$k."' type='text' value='".$a=fetch_data($table, $k, $relay)."'/></td> ";
    echo "<td style='width: 20%; border: 1px solid gray'><input id='relay_on_".$k."' type='text' value='".$a=fetch_data($table, $k, $relay_on)."'/></td>";
    echo "<td style='width: 20%; border: 1px solid gray'><input id='relay_off_".$k."' type='text' value='".$a=fetch_data($table, $k, $relay_off)."'/></td>";
    //echo "<td style='width: 20%; border: 1px solid gray'><button onclick='getSettings(`relay_name_".$k."`, `relay_".$k."`, `relay_on_".$k."`, `relay_off_".$k."`)'>Set</button></td>";
  echo "</tr>";
  
      
/*    <td style='width: 20%; border: 1px solid gray'><?php echo fetch_data('sensor', $i); ?></td>
    <?php echo fetch_data('relay', $i); ?></td>
    <?php echo fetch_data('r_on', $i); ?></td>
    <?php echo fetch_data('r_off', $i); ?></td>
*/
} //for 
?>
</table>


<?php
// insert/update db 
echo "<br/>";
	
	echo "</div>"; // id='assigment_wrapper 
	echo "</div>"; // End id="content_div"
?>
<!-- DO NOT REMOVE -->
</body>
</html>

