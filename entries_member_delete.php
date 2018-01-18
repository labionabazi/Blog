<?php

if (isset($_GET['eid'])) $EntryId = $_GET['eid'];
else $EntryId = 0;

if (getUserIdFromSession() == 0 ){
    header('location: index.php?function=login&bid='.$blogId);

}else {
        deleteEntry($EntryId);
        header('location: index.php?function=entries_member&bid='.$_SESSION['uid']);
}
?>
