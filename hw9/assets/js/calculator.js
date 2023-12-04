// JavaScript Document

function calculate(){
	const num1= parseInt(document.getElementById('num1').value);
	const num2=parseInt(document.getElementById('num2').value);
	var calcFunc=document.getElementById('calcFunc');
	const results=document.getElementById('results');
	switch(calcFunc.value){
		case "multiply":
			results.value = num1 * num2;
			break;
		case "add":
			results.value = num1 + num2;
			break;
		case "subtract":
			results.value = num1 - num2;
			break;
		case "divide":
			results.value = num1 / num2;
			break;
		default:
			results.value = -1;
	}
	results.innerHTML = "<h3>" + results.value + "<h3>"
}
var calcExec = document.getElementById('calcExec');

calcExec.addEventListener('click', calculate, false);