<?php
$blogs = getUserNames();

foreach ($blogs as $blog) {
	if($blog['uid'] == $blogId){

	echo "<div class='btn btn-secondary'><a href='index.php?function=entries_public&bid=";
	echo $blog['uid'];
	echo "' title='Blog auswählen'><h4>";
	echo $blog['name'];
	echo "</h4></a></div>";
}
else{
	echo "<div class='btn btn-primary'><a href='index.php?function=entries_public&bid=";
	echo $blog['uid'];
	echo "' title='Blog auswählen'><h4>";
	echo $blog['name'];
	echo "</h4></a></div>";
}
	}
?>
