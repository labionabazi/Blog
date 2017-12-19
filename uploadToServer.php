<?php
  $fp = @fopen("exchange/import/test.csv", "r") or die ("Datei nicht kompatibel");
  while($zeile = fgets($fp, 1024)){
    $spalten = explode(";", $zeile);

    $name = $spalten[0]
    $email = $spalten[1]
    $pw = $spalten[2]

    if(!empty($name) || !empty($email) || !empty($pw)){
      addUser($name, $email, $pw, 1);
    }else{
        alert("kein File ausgewählt");
    }
  }
fclose($fp);
?>
