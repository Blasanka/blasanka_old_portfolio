function validate(){
	var name = document.forms["myForm"]["uname"].value;
	var pas = document.forms["myForm"]["pass"].value;
	if((name == "" || name == null) || (pas == "" || pass == null)){
		alert("Enter username and password");
		return false;
	}else{
		return true;
	}
}