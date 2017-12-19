<?php
  $upload_folder = 'exchange/import/'; //Upload Verzeichniss
  $Filename = 'test';
    $extension = strtolower(pathinfo($_Files['datei']['name'], PATHINFO_EXTENSION));
  // Pfad zum Upload
  $new_path = $upload_folder.$filename.'.'.$extension;

  if($extension == 'csv'){
    // Dateinamen ersetzen
    if(file_exists($new_path)) unlink($new_path);
    // Alles okay, verschiebe Datei an neuen Pfad
    move_uploaded_file($_Files['datei']['tmp_name'], $new_path);
      header('Location: index.php?function=Import_Export&bid='.$blogId);
  }
 ?>
