<?php
  // Alle Blogeinträge holen, die Blog-ID ist in der Variablen $blogId gespeichert
  // Hier Code....
$Entry = getEntry($EntryId);
  echo "<div><h4>".$Entry['title']." ".date("d.m.y",$Entry['datetime'])."</h4>";
  echo "<p>".$Entry['content']."</p>";
  echo '<a href="index.php?function=entries_public&bid=';
  echo $blogId;
  echo '&eid=';
  echo $Entry['eid'];
  echo '" class="btn btn-primary">Go Back</a></div>';





  // Schlaufe über alle Einträge dieses Blogs
  // Hier Code....

  // Nachfolgend das Beispiel einer Ausgabe in HTML, dieser Teil muss mit einer Schlaufe über alle Blog-Beiträge und der Ausgabe mit PHP ersetzt werden
?>
  <!-- <div>
  <h4>Hipster Ipsum, 01.11.2016 16:42:12</h4>
  Neutra truffaut blog, 90's microdosing gochujang fingerstache helvetica etsy. Shoreditch fashion axe tote bag wayfarers normcore, freegan hot chicken sriracha 8-bit brunch actually live-edge quinoa. Trust fund sustainable forage tilde, etsy gentrify 8-bit poutine blog swag lomo pug. Truffaut ugh pinterest, umami tofu hoodie cronut. Crucifix skateboard single-origin coffee, vape slow-carb pork belly direct trade everyday carry photo booth schlitz venmo franzen. Air plant viral stumptown pabst disrupt. Readymade mumblecore tumeric kitsch hashtag, godard trust fund.
  </div> -->
