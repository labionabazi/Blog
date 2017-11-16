<?php
  // Alle Blogeinträge holen, die Blog-ID ist in der Variablen $blogId gespeichert
  // Hier Code....
$Bentries = getEntries($blogId);
foreach ($Bentries as $Bentrie) {
  echo "<div><h4>".$Bentrie['title']." ".date("d.m.y",$Bentrie['datetime'])."</h4>";
  echo "<p>";

  $kurz = preg_replace("/[^ ]*$/", '', substr($Bentrie['content'], 0, 200));
  $ppp = '...';
  $kurz .= $ppp;
  echo $kurz;
  echo "</p>";
  echo '<a href="index.php?function=entries_public_complete&bid=';
  echo $blogId;
  echo '&eid=';
  echo $Bentrie['eid'];
  echo '" class="btn btn-primary">Show more</a>';
  echo '<a href="index.php?function=blogs&bid=';
  echo $blogId;
  echo '&eid=';
  echo $Bentrie['eid'];
  echo '" class="btn btn-primary">Go To Blogs</a></div>';


}
  // Schlaufe über alle Einträge dieses Blogs
  // Hier Code....

  // Nachfolgend das Beispiel einer Ausgabe in HTML, dieser Teil muss mit einer Schlaufe über alle Blog-Beiträge und der Ausgabe mit PHP ersetzt werden
?>
  <!-- <div>
  <h4>Hipster Ipsum, 01.11.2016 16:42:12</h4>
  Neutra truffaut blog, 90's microdosing gochujang fingerstache helvetica etsy. Shoreditch fashion axe tote bag wayfarers normcore, freegan hot chicken sriracha 8-bit brunch actually live-edge quinoa. Trust fund sustainable forage tilde, etsy gentrify 8-bit poutine blog swag lomo pug. Truffaut ugh pinterest, umami tofu hoodie cronut. Crucifix skateboard single-origin coffee, vape slow-carb pork belly direct trade everyday carry photo booth schlitz venmo franzen. Air plant viral stumptown pabst disrupt. Readymade mumblecore tumeric kitsch hashtag, godard trust fund.
  </div> -->
