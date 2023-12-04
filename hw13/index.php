<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Form</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="../hw13/assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom one for my own site -->
	<link href="../hw13/assets/css/justified-nav.css" rel="stylesheet">
</head>
<body>
	<div id="wrapper">
	<div id="page-wrapper">
	<div id="page-inner">
		<!-- This is something we wouldn't do, but for now it is fine-->
		<?php
		if(!isset($_POST['submit']))
			{
			echo '
			<form id="contact" method="post" action="">
				<div class="form-group">
					<label for="firstName">First Name</label>
					<input name ="first_name" type="text" class="form-control" id="firstName" placeholder="First Name">
					<p id="firstNameStatus"></p>
					<label for="lastName">Last Name</label>
					<input name="last_name" type="text" class="form-control" id="lastName" placeholder="Last Name">
					<p id="lastNameStatus"></p>
					<label for="phoneNumber">Phone Number</label>
					<input name ="phone_number" type="text" class="form-control" id="phoneNumber" placeholder="Format:##########">
					<p id="phoneNumberStatus"></p>
					<label for="email">Email Address</label>
					<input name="email" type="email" class="form-control" id="email" placeholder="Email">
					<p id="emailStatus"></p>
					<label for="comments">Comments</label>
					<input name="comments" type="text" class="form-control" id="comments" placeholder="Please Type Here">
					<p id="commentsStatus"></p>
				</div>
				<button name="submit" id="btn" type="submit" value="submit">Submit</button>
			</form>';
		}
		if (isset($_POST['submit'])){
			if($_POST['submit'] == "submit"){
				echo "<div>Email is: $_POST[email]</div>";
				echo "<div>First Name is: $_POST[first_name]</div>";
				echo "<div>Last Name is: $_POST[last_name]</div>";
				echo "<div>Phone Number is: $_POST[phone_number]</div>";
				echo "<div>Comments is: $_POST[comments]</div>";
			}
		}
	?>
	</div>
	</div>
	</div>
</body>
</html>
<script src="../hw13/assets/js/validation.js"></script>
