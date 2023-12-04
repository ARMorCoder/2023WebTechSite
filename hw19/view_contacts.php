<?php
echo '<div id="wrapper">
	  <div id="page-wrapper">
	  <div id="page-inner">';
echo '<div class="jumbotron">';
echo '<h1>Contact Form Entries</h1>';
$dblink=db_connect("contact");
$sql = "Select * from `contact_info` where 1";
$result=$dblink->query($sql) or
	die("<p>something went wrong with: $sql</p>".$dblink->error);
echo '<div>';
echo '<table class="table-hover table-bordered">';
echo '<tr><th scope="col">First Name</th><th scope="col">Last Name</th><th scope="col">Phone Number</th><th scope="col">Email</th><th scope="col">Comments</th><tr>';

while($data=$result->fetch_array(MYSQLI_ASSOC)){
	echo '<tr>';
	echo '<td scope="row">'.$data['first_name'].'</td>';
	echo '<td>'.$data['last_name'].'</td>';
	echo '<td>'.$data['phone_number'].'</td>';
	echo '<td>'.$data['email'].'</td>';
	echo '<td>'.$data['comment'].'</td>';
	echo '</tr>';
}

echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>
	</div>
	</div>';

?>