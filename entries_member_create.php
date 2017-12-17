<?php
if(getUserIdFromSession() == 0){
  header('location: index.php?function=login&bid='.$blogId);
}

$meldung ="";

if(empty($_POST['title']) & empty($_POST['content'])){
  $title ='';
  $content ='';

}
else {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $createdEntry = addEntry($_SESSION['uid'],$title,$content);
    header('location: index.php?function=entries_member_create&bid='.$_SESSION['uid']);
}

 ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']."?function=entries_member_create"?>">
  <div class="form-group">
    <label for="inputEmail1">Title</label>
    <input type="text" class="from-control" id="Inputtitle" aria-describedby="emailHelp" placeholder="Titel of the article" name="title">
    <small id="titleHelp"  class="form-text text-murted"></small>
  </div>
  <div class="form-group">
    <label for="InputPassword1">Content</label>
    <textarea class="form-control1" id="Inputcontent" placeholder="Your text" name="content" row="300" cols="80"></textarea>
    <small id="contentHelp"  class="form-text text-murted"></small>
  </div>
  <div class="Fehlermeldung">
    <p><?php echo $meldung; ?></p>
  </div>
  <button type="submit" class="btn btn-primary">Create a post</button>
</form>
