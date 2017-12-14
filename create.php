<?php
if(getUserIdFromSession() == 0){
  header('location: index.php?function=login&bid='.$blogId);
}

$meldung ="";

if(empty($_POST['title']) & empty($_POST['content'])){
  $title ='';

}


 ?>
