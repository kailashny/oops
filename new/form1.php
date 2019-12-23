<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--script>
$(document).ready(function(){
	$("#sub").click(function(){ alert("ddd");
		$("p").hide();
	});	
});
</script-->

<script>
function validate()
{
	var name= document.getElementById('name').value;
	var email= document.getElementById('email').value;
	var abc= document.getElementById('sub').value;
	var pattarn = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-z]{2,4}$/";
	if(!name)
	{
		return false;
	}
	if(!email)
	{
		return false;
	}else{
		if(email.match(pattarn))
		{
			return true;
		}
		else
		{
			alert("please enter the valid email");
			//return false;
		}
	}
		
}

</script>

</head>
<body>
<form id="myform" action="form_data.php" enctype="multipart/form-data" onsubmit="return validate();" method="post">
<p>Name: <input type="text" name="name" id="name"></p>
<p>Email: <input type="email" name="email" id="email"></p>
<p>Upload: <input type="file" name="file" id="file"></p>
<p><input type="submit" id="sub" value="Submit" /></p>

</form>
</body>
</html>