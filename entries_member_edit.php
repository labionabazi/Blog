<?php
if(getUserIdFromSession() == 0){
  header('location: index.php?function=login&bid='.$blogId);
}

$updateValues['title'] = '';
$updateValues['content'] = '';

$Entry = getEntry($EntryId);

if(isset($_POST['title']) & isset($_POST['content'])){
  $updateValues['title'] = $_POST['title'];
  $updateValues['content'] = $_POST['content'];
  $updateValues['eid'] = $_POST['eid'];


$Editentry = updateEntry($updateValues['eid'], $updateValues['title'], $updateValues['content']);
header('Location: index.php?function=entries_member&bid='.$_SESSION['uid']);

}

 ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']."?function=entries_member_edit"?>">
  <div class="form-group">
    <input type="hidden" class="form-control" id="InputId" name="eid" value="<?php echo $entry['eid']; ?>">
    <label for="inputEmail1">Title</label>
    <input type="text" class="from-control" id="Inputtitle" aria-describedby="emailHelp" placeholder="Titel of the article" name="title" value="<?php echo $Entry['title']; ?>">
    <small id="titleHelp"  class="form-text text-murted"></small>
  </div>
  <div class="form-group">
    <label for="InputPassword1">Content</label>
    <textarea class="form-control1" id="Inputcontent" placeholder="Your text" name="content" row="300" cols="80"><?php echo $Entry['content']; ?></textarea>
    <small id="contentHelp"  class="form-text text-murted"></small>
  </div>
  <button type="submit" class="btn btn-primary">Beitrag ändern</button>
</form>
