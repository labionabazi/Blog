<?php
  // Alle Blogeinträge holen, die Blog-ID ist in der Variablen $blogId gespeichert
  // Hier Code....
$Entry = getEntry($EntryId);
$Comments = getComments($EntryId);
  echo "<div><h4>".$Entry['title']." ".date("d.m.y",$Entry['datetime'])."</h4>";
  echo "<p>".nl2br($Entry['content'])."</p>";
  echo '<a href="index.php?function=entries_public&bid=';
  echo $blogId;
  echo '&eid=';
  echo $Entry['eid'];
  echo '" class="btn btn-primary">Go Back</a></div>';
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']."?function=entries_public_createComment&bid=".$blogId."&eid=".$EntryId;?>">
  <div class="Kommentare">
    <h4>Kommentare</h4>
  <ul>
    <?php
    foreach($Comments as $Comment){
      echo '<li class="commentsCardLi"><div class="commentsCard"><p>'.$Comment['content'].'</p><small>'.date('d.m.Y',$Comment['datetime']).' '.$Comment['name'].'</small><br/>';
      echo '</div></li><br/>';
    }
    ?>
  </ul>
  <div class="addComment">
    <h4>Neuer Kommentar</h4>
    <label id="labelContent" for="commentContent">Kommentar</label><br/>
    <textarea row="50" cols="80" type="text" placeholder="Kommentar" id="commentCreate" name="content"></textarea><br/>
    <label id="labelTitle" for="commentTitle">Name</label><br/>
    <input type="text" placeholder="Erfasser/In" id="commentTitle" name="name">
    <a></a>
  </div>
  <div class="btnComment">
    <button type="submit" class="btn btn-primary">Kommentar erfassen</button>
  </div>
</form>
