<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);

?>
<!doctype html>
<html lang="en">
<!doctype html>

<html lang="en">
<head>
<?php require_once("app_struct/head.php");?>
<meta http-equiv="Refresh" content="5">
<title>Agstute</title>

<script>	
function reloadDiv(eid,data) {
//alert(eid)
//alert(data)
  document.getElementById(eid).innerHTML = data //check_cookie('DATA=')
}
</script>
	
<style>


</style>	

</head>

<body id="body"><!-- style='background: white'-->
<?php
// make a connection to mysql using PDO
$servername="localhost";
$db_name="agstatus_db";
$db_username="root";
$db_password="mamamia";
$table="index_tb";

$conn = new PDO("mysql:host=$servername;dbname=$db_name", $db_username, $db_password);

// get the last row
$lastID=$conn->query("SELECT row_id FROM $table ORDER BY row_id DESC LIMIT 1")->fetchColumn();
//echo "lastID=".$lastID."<br/>";

// fetch the data of that id and put it in an array
$stmt = $conn->prepare("SELECT * FROM $table WHERE row_id=$lastID");
$stmt->execute();
// put existing data into an array
if (($row = $stmt->fetch(PDO::FETCH_NUM)) != false) {

?>

<div id="content_div">

	<h1>Current View</h1>
	<img src="images/app_image.jpg" />
	<p id="title">Active Sensor</p>
	<p id="wt">Water tempture</p>
	<p id="ph">ph Level</p>
	<p id="hu">Humidity</p>
	<p id="ec">Conductivity</p>
	<p id="co2">CO2 Level</p>

</div> <!-- End id="content_div"-->
<?php 
   $output=$row;
   $dbString=$row;
   $str=$dbString[1];
   //echo "str= ".$str."<br/>"; 
   $eid=substr($str, 0, 3);
   //echo "eid is ".$eid."<br/>";
   $raw_data=substr($str, 3, 30);
   $json_data=json_encode($raw_data); // json encoded string

switch ($eid) {
    case "wt ":	//1
    //echo "id is wt";
    $data= str_replace('"'," ",$json_data); 
    $saved_wt_data=$data;
    echo "<script>reloadDiv('wt','$data')</script>";
break;

case "ph ":	//2
    //echo "id is ph";
    $data= str_replace('"'," ",$json_data);
    $saved_ph_data=$data;
    echo "<script>reloadDiv('ph','$data')</script>";
break;

case "hu ":	//3 with at
    //echo "id is hu";
    $data= str_replace('"'," ",$json_data);

    echo "<script>reloadDiv('hu','$data')</script>";
break;

case "co ":	//4
    //echo "id is co2";
    $data= str_replace('"'," ",$json_data);
    echo "<script>reloadDiv('co2','$data')</script>";
break;
case "ec ":	//5
    //echo "id is ec";
    $data= str_replace('"'," ",$json_data);
    echo "<script>reloadDiv('ec','$data')</script>";
break;

case "tds ":	//6
    echo "id is tds";
break;

case "sal":	//7
    echo "id is sal";
break;

case "sg ":	//8
    echo "id is sg ";
break;

default:
//do nothing
   }//switch
} //if

?>


<!-- DO NOT REMOVE -->
</body>
</html>

