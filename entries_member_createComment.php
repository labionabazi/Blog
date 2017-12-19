<?php
  if(getUserIdFromSession() == 0){
    header('Location: index.php?function=login&bid='.$blogId);
  }

  $Commentare = getComments($EntryId);

  if(!empty($_POST['name']) & !empty($_POST['content'])){
    // kommentar erfassen

    $titel = $_POST['name'];
    $content = $_POST['content'];

    $adddedComment = addComment ($EntryId, $titel, $content);
    header('Location: index.php?function=entries_member_details&bid='.$_SESSION['uid'].'$eid='.$EntryId);
  }



 ?>
