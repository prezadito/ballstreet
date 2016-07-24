// https://coolors.co/app/2b2d42-8d99ae-edf2f4-ef233c-d90429

// font-family: 'Baloo Da', cursive;
// font-family: 'Alegreya', serif;
// font-family: 'Rakkas', cursive;

// http://www.htmlgoodies.com/tutorials/buttons/article.php/3478871
// https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Forms/My_first_HTML_form
// https://www.formget.com/how-to-create-pop-up-contact-form-using-javascript/

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