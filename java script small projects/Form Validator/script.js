const form = document.getElementById('form');
const user = document.getElementById('Username');
const email = document.getElementById('Email');
const pass = document.getElementById('Password');
const pass2 = document.getElementById('Password2');


function showError(input,message){
	const formControl = input.parentElement;
	formControl.className = 'form-control error';
	const small = formControl.querySelector('small');
	small.innerText = message;
}

function showSuccess(input){
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}

function checkEmail(input){
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(input.value.trim() ===""){
		showError(input,`${input.id} is required`);
	}else if(re.test(input.value.trim())){
	showSuccess(input);
	}else{
		showError(input,'Email is not valid');
	}
}

function required(inputArr){
	inputArr.forEach(function(input){
		if(input.value.trim() ===""){
			showError(input,`${input.id} is required`);
		}else{
			showSuccess(input);
		}	
	});
}

function checkLength(input,min,max){
	if(input.value.trim() === ""){
		showError(input,`${input.id} is required`);
	}else if(input.value.length <min){
		showError(input,`${input.id} is less than ${min} characters`);
	}else if(input.value.length >max){
		showError(input,`${input.id} is more than ${max} characters`);
	}else{
		showSuccess(input);
	}
}
function passwordMatch(p1,p2){
	if(p2.value.trim() === ""){
		showError(p2,`${p2.id} is required`);
	}else if(p1.value !== p2.value){
		showError(p2,`${p2.id} does not match`);
	}else{
		showSuccess(p2);
	}
}
form.addEventListener('submit',function(e){
	e.preventDefault();
	required([user,email,pass,pass2]);
	checkEmail(email);
	checkLength(user,3,15);
	checkLength(pass,6,20);
	passwordMatch(pass,pass2);
});
