// JavaScript Document
var today = new Date();
var hourNow  = today.getHours();
var greeting;
var eltag=document.getElementById("greeting");
//make this into a switch statement for this assignment
/*
if (hourNow > 18){
	greeting = 'Good evening!';
}else if (hourNow > 12){
	greeting = 'Good afternoon';
}else if (hourNow > 0){
	greeting = 'Good Morning!';
}else{
	greeting = 'Welcome!';
}*/

switch(hourNow){
	case 1: case 2: case 3: case 4: case 5: case 6: case 7: case 8: case 9: case 10: case 11:
		greeting = 'Good morning!';
		break;
	case 12: case 13: case 14: case 15: case 16: case 17: case 18: 
		greeting = 'Good afternoon!';
		break;
	case 19: case 20: case 21: case 22: case 23: case 0:
		greeting = 'Good evening!';
		break;
	default:
		greeting = 'Welcome!';
}


eltag.innerHTML = '<h3>' + greeting + '</h3>';
//document.write('<h3>' + greeting + '</h3>'); NEVER USE FOR JAVASCRIPT!!!