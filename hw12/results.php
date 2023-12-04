<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Results Data</title>
</head>
<body>
	<?php
		if (isset($_GET['submit']) && $_GET['submit']=="submit"){
		echo "<div>Email is: $_GET[email]</div>";
		echo "<div>First Name is: $_GET[first_name]</div>";
		echo "<div>Last Name is: $_GET[last_name]</div>";
		echo "<div>Phone Number is: $_GET[phone_number]</div>";
		echo "<div>Comments is: $_GET[comments]</div>";
		}
		else{
			echo "<h3>Please go back and fill out the form.</h3>";
		}
	?>
</body>
</html>