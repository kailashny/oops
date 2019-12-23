<?php
include("coman.php");

if(isset($_GET['eid']))
{
	$abc = $userObj->deleteUser($_GET['eid']);
		if($abc)
		{
			header("Location:index.php");
		}
		else
		{
		 echo "Record Not added";
		}

}
