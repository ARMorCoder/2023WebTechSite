 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/justified-nav/">

    <title><?php
		if(!isset($_GET['page'])){
			echo 'Welcome to Anthony Martinez\'s page!';
		}else{
			switch($_GET['page']){
				case "education":
					echo 'My Education!';
					break;
				case "hobbies":
					echo 'My Hobbies!';
					break;
				case "shows":
					echo 'My Favorite Shows!';
					break;
				case "movies":
					echo 'My Favorite Movies!';
					break;
				case "contact":
					echo 'Contact Form';
					break;
				default:
					echo 'Welcome to Anthony Martinez\'s page!';
			}
		}
		?>
		</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/justified-nav.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">Welcome to my page!</h3>
        <nav>
          <?php include("navigation.php");?>
      </div>
		  <?php 
		  	$username="webuser";
		  	$password="sEw20I]auqHN)BS5";
		  	$db="content";
		  	$hostname="localhost";
		  	$dblink= new mysqli($hostname,$username,$password,$db);
		  	
			if (mysqli_connect_error()){
				die("Error connecting to database: ".mysqli_connect_error());
			}
		  
		  	if(!isset($_GET['page'])){
				$pageClean=addslashes("index");
			}else{
				//$page=$_GET['page'];
				$pageClean=addslashes($_GET['page']);
			}
		  	$sql="Select * from `pages` where `page_name`='$pageClean'";
		  	$result=$dblink->query($sql) or 
				die("<p>something went wrong with: $sql</p>".$dblink->error);
		  
		  	$data=$result->fetch_array(MYSQLI_ASSOC);
			echo $data['content_data'];
		  	/*if($data['content_type']=="data"){
				echo $data['content_data'];
			}else{
				include("replace.php");
			}*/
		  ?>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2023 Martinez, Anthony</p>
      </footer>
    </div> <!-- /container -->
  </body>
</html>
