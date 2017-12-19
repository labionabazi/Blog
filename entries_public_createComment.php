<?php
  if(!empty($_POST['name']) & !empty($_POST['content'])){
    //Funktion Kommi Erfassen
    $titel = $_POST['name'];
    $content = $_POST['content'];

    $addedComment = addComment($EntryId, $titel, $content);
    header('Location: index.php?function=entries_public_details&bid='.$blogId.'&eid='.$EntryId);
  }

 ?>
