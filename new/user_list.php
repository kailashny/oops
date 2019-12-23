<?php
include("coman.php");
$sql = "select employeeNumber, firstName,email from abc";
$res = mysqli_query($con,$sql);

$arr= array();
while($row = mysqli_fetch_assoc($res))
{
	$arr[]=$row;
}
echo json_encode($arr);

?>