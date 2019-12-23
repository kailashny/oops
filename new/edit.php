<?php
include("coman.php");


//echo "<pre>";
//print_r($abc);
if(isset($_POST['submit']) && $_POST['submit']=='Submit')
{
	if(!empty($_POST['eid']))
	{
		$xyz = $userObj->updateUser($_POST);
		if($xyz)
		{
			header("Location:index.php");
		}
		else
		{
		 echo "Not Updated";
		}
	}
	else
	{
		$xyz = $userObj->addUser($_POST);
		if($xyz)
		{
			header("Location:index.php");
		}
		else
		{
		 echo "Record Not added";
		}
	}
}

if(isset($_GET['eid']))
{
	$abc = $userObj->editUser($_GET['eid']);
	//echo "<pre>";
	//print_r($abc);die;
?>

<html>
<body>
  <form name="myform" action="" method="post">
  <h2>Edit Employee</h2>
	<input type="hidden" name="eid" value="<?php echo $abc['employeeNumber']; ?>" />
  <p>Name  : <input type="text" name="firstname" value="<?php echo $abc['firstName']; ?>" /></p>
  <p>Email : <input type="email" name="email" value="<?php echo $abc['email']; ?>" /></p>
  <p><input type="submit" name="submit" value="Submit"></p>
  
  </form>
</body>
</html>

<?php
}
else
{
?>
	
<html>
	<body>
	  <form name="myform" action="" method="post">
	  <h2>Add Employee</h2>
		<input type="hidden" name="eid" />
	  <p>Name  : <input type="text" name="firstname"  /></p>
	  <p>Email : <input type="email" name="email" /></p>
	  <p><input type="submit" name="submit" value="Submit"></p>
	  
	  </form>
	</body>
</html>
		
<?php
}