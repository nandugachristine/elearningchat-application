
function validateemail(){
	var x = document.myform.email.value;
	var atposition = x.indexOf("@");
	var dotposition = x.lastIndexOf(".");
	if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
	{
		alert("please enter a valid email address);
		return false;
	}
	}
