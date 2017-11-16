<?php
  // Alle Blogs bzw. Benutzernamen holen und falls Blog bereits ausgewählt, entsprechenden Namen markieren
  // Hier Code....
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
  // Schlaufe über alle Blogs bzw. Benutzer
  // Hier Code....

  // Nachfolgend das Beispiel einer Ausgabe in HTML, dieser Teil muss mit einer Schlaufe über alle Blogs und der Ausgabe mit PHP ersetzt werden
?>
	<!-- <div><a href='index.php?function=blogs&bid=4' title='Blog auswählen'><h4>Anna Abegglen</h4></a></div>
	<div><a href='index.php?function=blogs&bid=2' title='Blog auswählen'><h4>Hans Hinterseer</h4></a></div>
	<div><a href='index.php?function=blogs&bid=1' title='Blog auswählen'><h4>Marc Muster</h4></a></div>
	<div><a href='index.php?function=blogs&bid=3' title='Blog auswählen'><h4>Sonja Sauser</h4></a></div> -->
