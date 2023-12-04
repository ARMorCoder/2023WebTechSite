<script src="assets/js/jquery-3.5.1.js"></script>
<?php
echo '<div id="wrapper">
	  <div id="page-wrapper">
	  <div id="page-inner">';
echo '<div class="jumbotron">';
echo '<h1>Contact Form Entries</h1>';
echo '<div>';
echo '<table class="table-hover table-bordered">';
echo '<tr><th scope="col">First Name</th><th scope="col">Last Name</th><th scope="col">Phone Number</th><th scope="col">Email</th><th scope="col">Comments</th><tr>';

echo '<tbody id="results">';
echo '</tbody>';
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>
	</div>
	</div>';

?>

<script>
	function refresh_data(){
		$.ajax({
			type: 'post',
			url: 'https://ec2-3-141-197-204.us-east-2.compute.amazonaws.com/hw20/query_contacts.php',
			success: function(data){
				$('#results').html(data);
			}
		});
	}
	setInterval(function(){refresh_data();}, 500);
</script>