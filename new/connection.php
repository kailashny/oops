<?php

global $con;
$con= mysqli_connect("localhost","root","");
if($con){
	$db = mysqli_select_db($con,"kailash");
}
else
{
	echo "database is not connected";
	die;
}

?>