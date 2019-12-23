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
	alert(name.length);
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
			return false;
		}
	}
	if(abc=='Save')
	{
		document.getElementById('myform').submit();
		return(true);
	}
	else
	{
		return false;
	}
	
}

</script>

</head>
<body>
<form id="myform" action="form_data.php" method="post">
<p>Name: <input type="text" name="name" id="name"></p>
<p>Email: <input type="email" name="email" id="email"></p>
<p><input type="button" id="sub" value="Save" onclick="validate();" /></p>
<div id="demo">
    Onclick on Button It is Hide
</div>
</form>
</body>
</html>