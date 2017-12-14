<?php
if(getUserIdFromSession() == 0){

  header('location: index.php?function=login&bid='.$blogId);
}
else {
  $beitrag = getEntries($_SESSION['uid']);
}
foreach($beitrag as $b){
  echo '<div class="card" style="width: 30rem; float;left;">
        <div class="card-body"><h4 class="card-title"> ';
  echo $b['title'];
  echo '</h4><p class"card-text"><p>';
  echo date('d.m.Y',$b['datetime']);
  echo '</p>';

  $anzeige = preg_replace("/[^ ]*$/", '', substr($b['content'], 0, 200));
  $punkt = '...';
  $anzeige .= $punkt;
  echo $anzeige;
  echo '</p>';
  echo '<a href="index.php?function=entries_member_details&bid='.$_SESSION['uid'].'&eid='.$b['eid'].'"><div class="buttonM">Details</div></a>';
  echo '<a href="index.php?function=entries_member_delete&bid='.$_SESSION['uid'].'&eid='.$b['eid'].'" onclick="return confirmDelete();">Delete</a>';
  echo '<a href="index.php?function=entries_member_edit&bid='.$_SESSION['uid'].'&eid='.$b['eid'].'"><div class="buttonM"> Modify</a>';
  echo '</div></div>';
}
 ?>
