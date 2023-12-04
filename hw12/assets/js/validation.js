// JavaScript Document
//Used to validate Email
var vCheck = 0;

function validateEmail(email){
	//regex for email validation
	var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var elEmailStatus=document.getElementById('emailStatus');
	//activates alert
	elEmailStatus.classList.add("alert");
	if(email.value.match(validRegex)){
		//removes danger alert and actiavtes success alert
		elEmailStatus.classList.remove("alert-danger");
		elEmailStatus.classList.add("alert-success");
		elEmailStatus.innerHTML="This email is valid";
	}else{
		//removes success alert and activates danger alert
		elEmailStatus.classList.remove("alert-success");
		elEmailStatus.classList.add("alert-danger");
		elEmailStatus.innerHTML="This email is invalid!";
	}	
}
//Used to validate both first name and last name 
function validateName(name, statusName, nameType){
	//regex for this validation
	var validRegex = /^[a-zA-Z(-/')]{2,30}$/;
	var elNameStatus=document.getElementById(statusName);
	elNameStatus.classList.add("alert");
	//same activation as email
	if(name.value.match(validRegex)){
		elNameStatus.classList.remove("alert-danger");
		elNameStatus.classList.add("alert-success");
		elNameStatus.innerHTML= "This " + nameType + " name is valid!";
	}else{
		elNameStatus.classList.remove("alert-success");
		elNameStatus.classList.add("alert-danger");
		elNameStatus.innerHTML= "This " + nameType + " name is invalid!";
	}
}
//used to validate phone numbers
function validatePhoneNumber(phoneNum){
	//regex to check phone number 
	var validRegex = /^\d{10}$/i;
	//regex to check if any letters or spaces
	var validCharRegex = /[a-zA-Z]\s/;
	var elPhoneNumberStatus=document.getElementById('phoneNumberStatus');
	elPhoneNumberStatus.classList.add("alert");
	//first if checks for both number regex and letter regex
	if(phoneNum.value.match(validRegex) && !phoneNum.value.match(validCharRegex)){
		elPhoneNumberStatus.classList.remove("alert-danger");
		elPhoneNumberStatus.classList.add("alert-success");
		elPhoneNumberStatus.innerHTML="This number is valid!";
	}else{
		elPhoneNumberStatus.classList.remove("alert-success");
		elPhoneNumberStatus.classList.add("alert-danger");
		elPhoneNumberStatus.innerHTML="This number is invalid!";
	}
}
//used to validate comments (checks if null or not for now)
function validateComments(comments){
	var elCommentsStatus = document.getElementById('commentsStatus');
	elCommentsStatus.classList.add("alert");
	if(comments.value.length != 0){
		elCommentsStatus.classList.remove("alert-danger");
		elCommentsStatus.classList.add("alert-success");
		elCommentsStatus.innerHTML="This comment is valid!";
	}else{
		elCommentsStatus.classList.remove("alert-success");
		elCommentsStatus.classList.add("alert-danger");
		elCommentsStatus.innerHTML="This comment is invalid!";
	}
}
//Event listener activations from index.html


var elEmail=document.getElementById('email');
elEmail.addEventListener('blur', function(){validateEmail(elEmail);}, false);

var elfirstName=document.getElementById('firstName');
elfirstName.addEventListener('blur', function(){validateName(elfirstName, 'firstNameStatus', "first");}, false);
var ellastName=document.getElementById('lastName');
ellastName.addEventListener('blur', function(){validateName(ellastName, 'lastNameStatus', "last");}, false);

var elPhoneNumber=document.getElementById('phoneNumber');
elPhoneNumber.addEventListener('blur', function(){validatePhoneNumber(elPhoneNumber);}, false);

var elComments = document.getElementById('comments');
elComments.addEventListener('blur', function(){validateComments(elComments);}, false);
//used to check validation for submit
var elSubmit = document.getElementById('btn');
elSubmit.addEventListener('click', function(event){
	var elfNameStatus = document.getElementById('firstNameStatus');
	var ellNameStatus = document.getElementById('lastNameStatus');
	var elemailStatus = document.getElementById('emailStatus');
	var elphoneStatus = document.getElementById('phoneNumberStatus');
	var elcommStatus = document.getElementById('commentsStatus');
	
	if(elfNameStatus.classList.contains("alert-success")){
		vCheck += 1;
	}
	if(ellNameStatus.classList.contains("alert-success")){
		vCheck += 1;
	}
	if(elemailStatus.classList.contains("alert-success")){
		vCheck += 1;
	}
	if(elphoneStatus.classList.contains("alert-success")){
		vCheck += 1;
	}
	if(elcommStatus.classList.contains("alert-success")){
		vCheck += 1;
	}
	
	if(vCheck != 5){
		console.log("vCheck is " + vCheck);
		event.preventDefault();	
		vCheck = 0;
	}else{
		vCheck = 0;
		return true;
	}
	console.log("Checking");
}, false);

