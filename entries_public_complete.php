<?php
  // Alle Blogeinträge holen, die Blog-ID ist in der Variablen $blogId gespeichert
  // Hier Code....
$Entry = getEntry($EntryId);
  echo "<div><h4>".$Entry['title']." ".date("d.m.y",$Entry['datetime'])."</h4>";
  echo "<p>".nl2br($Entry['content'])."</p>";
  echo '<a href="index.php?function=entries_public&bid=';
  echo $blogId;
  echo '&eid=';
  echo $Entry['eid'];
  echo '" class="btn btn-primary">Go Back</a></div>';
?>
