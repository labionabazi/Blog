<?php
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
?>
