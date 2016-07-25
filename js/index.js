// Validating Empty Field
function check_empty() {
	if (document.getElementById('name').value == "" || document.getElementById('email').value == "") {
		alert("Please Fill All Fields");
	} else {
		document.getElementById('form').submit();
		alert("Thank You!");
	}
}

//Function To Display Popup
function div_show() {
	document.getElementById('abc').style.display = "block";
}

//Function to Hide Popup
function div_hide(){
	document.getElementById('abc').style.display = "none";
}