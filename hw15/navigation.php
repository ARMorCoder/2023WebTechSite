<?php
echo '<nav>';
echo '<ul class="nav nav-justified">';
if(!isset($_GET['page'])){//page does not exist, initial load 
     	echo '<li><a href="index.php?page=home">Home</a></li>';
        echo '<li><a href="index.php?page=education">Education</a></li>';
        echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
        echo '<li><a href="index.php?page=shows">Favorite Shows</a></li>';
        echo '<li><a href="index.php?page=movies">Favorite Movies</a></li>';
        echo '<li><a href="index.php?page=contact">Contact</a></li>';
}else{
	switch($_GET['page']){//page variable exists, switch to each condition 
		case "home":
			echo '<li class="active"><a href="index.php?page=home">Home</a></li>';
			echo '<li><a href="index.php?page=education">Education</a></li>';
			echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
			echo '<li><a href="index.php?page=shows">Favorite Shows</a></li>';
			echo '<li><a href="index.php?page=movies">Favorite Movies</a></li>';
			echo '<li><a href="index.php?page=contact">Contact</a></li>';
			break;
		case "education":
			echo '<li><a href="index.php?page=home">Home</a></li>';
			echo '<li class="active"><a href="index.php?page=education">Education</a></li>';
			echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
			echo '<li><a href="index.php?page=shows">Favorite Shows</a></li>';
			echo '<li><a href="index.php?page=movies">Favorite Movies</a></li>';
			echo '<li><a href="index.php?page=contact">Contact</a></li>';
			break;
		case "hobbies":
				echo '<li><a href="index.php?page=home">Home</a></li>';
				echo '<li><a href="index.php?page=education">Education</a></li>';
				echo '<li class="active"><a href="index.php?page=hobbies">Hobbies</a></li>';
				echo '<li><a href="index.php?page=shows">Favorite Shows</a></li>';
				echo '<li><a href="index.php?page=movies">Favorite Movies</a></li>';
				echo '<li><a href="index.php?page=contact">Contact</a></li>';
				break;
		case "shows":
				echo '<li><a href="index.php?page=home">Home</a></li>';
				echo '<li><a href="index.php?page=education">Education</a></li>';
				echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
				echo '<li class="active"><a href="index.php?page=shows">Favorite Shows</a></li>';
				echo '<li><a href="index.php?page=movies">Favorite Movies</a></li>';
				echo '<li><a href="index.php?page=contact">Contact</a></li>';
				break;
		case "movies":
				echo '<li><a href="index.php?page=home">Home</a></li>';
				echo '<li><a href="index.php?page=education">Education</a></li>';
				echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
				echo '<li><a href="index.php?page=shows">Favorite Shows</a></li>';
				echo '<li class="active"><a href="index.php?page=movies">Favorite Movies</a></li>';
				echo '<li><a href="index.php?page=contact">Contact</a></li>';
				break;
		case "contact":
				echo '<li><a href="index.php?page=home">Home</a></li>';
				echo '<li><a href="index.php?page=education">Education</a></li>';
				echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
				echo '<li><a href="index.php?page=shows">Favorite Shows</a></li>';
				echo '<li><a href="index.php?page=movies">Favorite Movies</a></li>';
				echo '<li class="active"><a href="index.php?page=contact">Contact</a></li>';
				break;
		default:
			echo '<li class="active"><a href="index.php?page=home">Home</a></li>';
			echo '<li><a href="index.php?page=education">Education</a></li>';
			echo '<li><a href="index.php?page=hobbies">Hobbies</a></li>';
			echo '<li><a href="index.php?page=shows">Favorite Shows</a></li>';
			echo '<li><a href="index.php?page=movies">Favorite Movies</a></li>';
        	echo '<li><a href="index.php?page=contact">Contact</a></li>';
	}
}
echo '</ul>';
echo '</nav>';
?>