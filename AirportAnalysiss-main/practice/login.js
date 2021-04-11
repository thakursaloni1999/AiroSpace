function login()
	{
		var uname = document.getElementById("email").value;
		var pwd = document.getElementById("pwd1").value;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(uname =='')
		{
			alert("please enter user name.");
            return false;
		}
		else if(pwd=='')
		{
        	alert("enter the password");
            return false;
		}
		else if(!filter.test(uname))
		{
			alert("Enter valid email id.");
            return false;
		}
		return true;
	}