<?php

class User
{
	function addUser($val)
	{
		global $con;
		$fname = $val['firstname'];
		$email = $val['email'];
		$sql ="insert into abc(firstname,email) values('$fname','$email')";
		//echo $sql;die;
		$res = mysqli_query($con,$sql);
		if($res)
		{
			return true;
		}else
		{
			return false;
		}		
	}
	function editUser($eid)
	{
		global $con;
		$sql ="select * from abc where employeeNumber=$eid";
		$res = mysqli_query($con,$sql);
		$result = mysqli_fetch_assoc($res);
		if($result)
		{
			return $result;
		}else
		{
			return false;
		}	
	}
	function updateUser($val)
	{
		global $con;
		$eid = $val['eid'];
		$fname = $val['firstname'];
		$email = $val['email'];
		$sql ="update abc set firstname='$fname',email='$email' where employeeNumber=$eid";
		$res = mysqli_query($con,$sql);
		if($res)
		{
			return true;
		}else
		{
			return false;
		}	
	}
	function deleteUser($eid)
	{
		global $con;
		$sql ="delete from abc where employeeNumber=$eid";
		$res = mysqli_query($con,$sql);
		if($res)
		{
			return true;
		}else
		{
			return false;
		}	
	}
	
}
$userObj = new User;

?>