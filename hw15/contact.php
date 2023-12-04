<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Form</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom one for my own site -->
	<link href="assets/css/justified-nav.css" rel="stylesheet">
</head>
<body>
	<div id="wrapper">
	<div id="page-wrapper">
	<div id="page-inner">
		<?php
		if(!isset($_POST['submit']))
			{
				echo '<form id="contact" method="post" action="index.php?page=contact">';
			////first name
			//If there is not error
				if(!isset($_GET['fname'])){
					//if there is data in Session for first name
					if(isset($_SESSION['fname'])){
						echo '<div class="form-group">';
						echo '<label for="firstName">First Name</label>';
						echo'<input name ="firstName" type="text" class="form-control" value="'.$_SESSION['fname'].'">';
						echo'<p></p>';
						echo'</div>';
					}else{//if not, return to normal
						echo '<div class="form-group">';
						echo '<label for="firstName">First Name</label>';
						echo'<input name ="firstName" type="text" class="form-control" placeholder="First Name">';
						echo'<p></p>';
						echo'</div>';
					}
			}
			//if there is an fname error 
			else if(isset($_GET['fname'])){
				//checks if the error is NULL or invalid, if not just load with no errors
				switch($_GET['fname']){
					case "fnameNULL":
						echo '<div class="form-group has-error">';
						echo '<label for="firstName">First Name</label>';
						echo'<input name ="firstName" type="text" class="form-control" placeholder="First Name">';
						echo'<p class="alert-danger">First Name Cannot be NULL</p>';
						echo'</div>';
						break;
					case "fnameInvalid":
						echo '<div class="form-group has-error">';
						echo '<label for="firstName">First Name</label>';
						echo'<input name ="firstName" type="text" class="form-control" value="'.$_SESSION['fname'].'">';
						echo'<p class="alert-danger">First Name is invalid!</p>';
						echo'</div>';
						break;
					default:
						echo '<div class="form-group">';
						echo '<label for="firstName">First Name</label>';
						echo'<input name ="firstName" type="text" class="form-control" value="'.$_SESSION['fname'].'">';
						echo'<p></p>';
						echo'</div>';
				}
			}
			///last name
			if(!isset($_GET['lname'])){
				if(isset($_SESSION['lname'])){
					echo '<div class="form-group">';
					echo '<label for="lastName">Last Name</label>';
					echo '<input name="lastName" type="text" class="form-control" value="'.$_SESSION['lname'].'" >';
					echo '<p></p>';
					echo '</div>';
				}else{
					echo '<div class="form-group">';
					echo '<label for="lastName">Last Name</label>';
					echo '<input name="lastName" type="text" class="form-control" placeholder="Last Name">';
					echo '<p></p>';
					echo '</div>';
				}
			}else if(isset($_GET['lname'])){
				//checks if the error is NULL or invalid, if not just load with no errors
				switch($_GET['lname']){
					case "lnameNULL":
						echo '<div class="form-group has-error">';
						echo '<label for="lastName">Last Name</label>';
						echo '<input name="lastName" type="text" class="form-control" placeholder="Last Name">';
						echo '<p class="alert-danger">Last Name Cannot be NULL</p>';
						echo '</div>';
						break;
					case "lnameInvalid":
						echo '<div class="form-group has-error">';
						echo '<label for="lastName">Last Name</label>';
						echo '<input name="lastName" type="text" class="form-control" value="'.$_SESSION['lname'].'">';
						echo '<p class="alert-danger">Last Name is invalid!</p>';
						echo '</div>';
						break;
					default:
						echo '<div class="form-group">';
						echo '<label for="firstName">First Name</label>';
						echo'<input name ="firstName" type="text" class="form-control" value="'.$_SESSION['lname'].'">';
						echo'<p></p>';
						echo'</div>';
					}
			}
			///Phone Number
			if(!isset($_GET['phoneNum'])){
				if(isset($_SESSION['phoneNum'])){
					echo '<div class="form-group">';
					echo '<label for="phoneNumber">Phone Number</label>';
					echo '<input name ="phoneNumber" type="text" class="form-control" value="'.$_SESSION['phoneNum'].'">';
					echo '<p></p>';
					echo '</div>';
				}else{
					echo '<div class="form-group">';
					echo '<label for="phoneNumber">Phone Number</label>';
					echo '<input name ="phoneNumber" type="text" class="form-control" placeholder="Format:##########">';
					echo '<p></p>';
					echo '</div>';
				}
			}else if(isset($_GET['phoneNum'])){
				//checks if the error is NULL or invalid, if not just load with no errors
				switch($_GET['phoneNum']){
					case "phoneNULL":
						echo '<div class="form-group has-error">';
						echo '<label for="phoneNumber">Phone Number</label>';
						echo '<input name ="phoneNumber" type="text" class="form-control" placeholder="Format:##########">';
						echo '<p class="alert-danger">Phone number cannot be NULL</p>';
						echo '</div>';
						break;
					case "phoneInvalid":
						echo '<div class="form-group has-error">';
						echo '<label for="phoneNumber">Phone Number</label>';
						echo '<input name ="phoneNumber" type="text" class="form-control" value="'.$_SESSION['phoneNum'].'">';
						echo '<p class="alert-danger">Phone number is invalid</p>';
						echo '</div>';
						break;
						
					default:
						echo '<div class="form-group">';
						echo '<label for="phoneNumber">Phone Number</label>';
						echo '<input name ="phoneNumber" type="text" class="form-control" value="'.$_SESSION['phoneNum'].'">';
						echo '<p></p>';
						echo '</div>';
						
				}
			}
			///Email
			if(!isset($_GET['email'])){
				if(isset($_SESSION['email'])){
					echo '<div class="form-group">';
					echo '<label for="email">Email Address</label>';
					echo '<input name="email" type="text" class="form-control" value="'.$_SESSION['email'].'">';
					echo '<p></p>';
					echo '</div>';
				}else{
					echo '<div class="form-group">';
					echo '<label for="email">Email Address</label>';
					echo '<input name="email" type="text" class="form-control" placeholder="Email">';
					echo '<p></p>';
					echo '</div>';
				}
			}else if(isset($_GET['email'])){
				//checks if the error is NULL or invalid, if not just load with no errors
				switch($_GET['email']){
					case "emailNULL":
						echo '<div class="form-group has-error">';
						echo '<label for="email">Email Address</label>';
						echo '<input name="email" type="text" class="form-control" placeholder="Email">';
						echo '<p class="alert-danger">Email cannot be NULL</p>';
						echo '</div>';
						break;
					case "emailInvalid":
						echo '<div class="form-group has-error">';
						echo '<label for="email">Email Address</label>';
						echo '<input name="email" type="text" class="form-control" value="'.$_SESSION['email'].'">';
						echo '<p class="alert-danger">Email is invalid!</p>';
						echo '</div>';
						break;
					default:
						echo '<div class="form-group">';
						echo '<label for="email">Email Address</label>';
						echo '<input name="email" type="text" class="form-control" value="'.$_SESSION['email'].'">';
						echo '<p></p>';
						echo '</div>';
				}
			}
			//Comment
			if(!isset($_GET['comment'])){
				if(isset($_SESSION['comment'])){
					echo '<div class="form-group">';
					echo '<label for="comments">Comments</label>';
					echo '<input name="comments" type="text" class="form-control" value="'.$_SESSION['comment'].'">';
					echo '<p></p>';
					echo '</div>';
				}else{
					echo '<div class="form-group">';
					echo '<label for="comments">Comments</label>';
					echo '<input name="comments" type="text" class="form-control" placeholder="Please Type Here">';
					echo '<p></p>';
					echo '</div>';
				}
			}else if(isset($_GET['comment'])){
				//checks if the error is NULL or invalid, if not just load with no errors
				switch($_GET['comment']){
					case "commentNULL":
						echo '<div class="form-group has-error">';
						echo '<label for="comments">Comments</label>';
						echo '<input name="comments" type="text" class="form-control" placeholder="Please Type Here">';
						echo '<p class="alert-danger">Comment cannot be NULL</p>';
						echo '</div>';
						break;
					default:
						echo '<div class="form-group">';
						echo '<label for="comments">Comments</label>';
						echo '<input name="comments" type="text" class="form-control" value="'.$_SESSION['comment'].'">';
						echo '<p></p>';
						echo '</div>';	
				}
				
			}
			echo '<button name="submit" type="submit" value="submit">Submit</button>';
			echo '</form>';
		}
		//Submit 
		if (isset($_POST['submit'])){
			if($_POST['submit'] == "submit"){
				unset($errStatus);
				$errStatus=array();
				$check = 0;
				$email=$_POST['email'];
				$firstName =$_POST['firstName'];
				$lastName =$_POST['lastName'];
				$phoneNumber=$_POST['phoneNumber'];
				$comment=$_POST['comments'];
				
				$phoneRegex = "/^[0-9]{10}+$/";
				$nameRegex = "/^([a-zA-Z'-]+)$/";
				
				//first name
				if($firstName==NULL){
					$errStatus[] = "fname=fnameNULL";
					$_SESSION['fname']=$firstName;
				}else if(!preg_match($nameRegex, $firstName)){
					$errStatus[] = "fname=fnameInvalid";
					$_SESSION['fname']=$firstName;
				}else{
					$_SESSION['fname']=$firstName;
				}
				
				//last name
				if($lastName==NULL){
					$errStatus[]="lname=lnameNULL";
					$_SESSION['lname']=$lastName;
				}else if(!preg_match($nameRegex, $lastName)){
					$errStatus[]="lname=lnameInvalid";
					$_SESSION['lname']=$lastName;
				}else{
					$_SESSION['lname']=$lastName;
				}
				//phone number
				if($phoneNumber==NULL){
					$errStatus[]="phoneNum=phoneNULL";
					$_SESSION['phoneNum']=$phoneNumber;
				}else if(!preg_match($phoneRegex, $phoneNumber)){
					$errStatus[]="phoneNum=phoneInvalid";
					$_SESSION['phoneNum']=$phoneNumber;
				}else{
					$_SESSION['phoneNum']=$phoneNumber;
				}
				//email
				if($email==NULL){
					$errStatus[]="email=emailNULL";
					$_SESSION['email']=$email;
				}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					$errStatus[]="email=emailInvalid";
					$_SESSION['email']=$email;
				}				
				else{
					$_SESSION['email']=$email;
				}
				//comment
				if($comment==NULL){
					$errStatus[]="comment=commentNULL";
					$_SESSION['comment']=$comment;
				}else{
					$_SESSION['comment']=$comment;
				}
				///checking error status
				if(count($errStatus)>0){
					$errString=implode("&", $errStatus);
					header("Location: https://ec2-3-141-197-204.us-east-2.compute.amazonaws.com/hw15/index.php?page=contact&$errString");
				}
				
				echo "<div>Email is: $_POST[email]</div>";
				echo "<div>First Name is: $_POST[firstName]</div>";
				echo "<div>Last Name is: $_POST[lastName]</div>";
				echo "<div>Phone Number is: $_POST[phoneNumber]</div>";
				echo "<div>Comments is: $_POST[comments]</div>";
			}
		}
	?>
	</div>
	</div>
	</div>
</body>
</html>