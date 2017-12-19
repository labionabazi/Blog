<?php
if(getUserIdFromSession() == 0){
  header('Location: index.php?function=login&bid='.$blogid);
}
elseif($UserRole !=2){
  header('Location: index.php?function=login&bid='.$blogId);
}
 ?>

 <form action="<?php eco $_Server['PHP_Self']."?function=upload&bid=".$blodId;?>" method="post" enctype="multipart/form-data">
 <input class="btn btn-secondary" type="file" name="datei"><br>
 <input class="btn btn-success" type="submit" value="Hochladen"
</form>

<a class="btn btn-primary"<?php echo 'href="index.php?function=uploadToServer&bid='.$blogId'"';?> Benutzer Erstellen</a>
