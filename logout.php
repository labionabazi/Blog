<?php
if (getUserIdFromSession() == 0){
  header('location: index.php?function=login&bid='.$blogId);
}else {
  unset($_SESSION['uid']);
  session_destroy();
  header('location: index.php?function=login&bid='.$blogId);
}
 ?>
