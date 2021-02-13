<?php
if(isset($_GET["id"])) {
  if($_GET["id"] == "M") {
    if(file_exists("m,txt")) {
      unlink("m.txt");
    }
    $f = fopen("m.txt", "w+");
    fwrite($f, $_COOKIE["M"]);
    fclose($f);
    if(file_exists("s.txt")) {
      $f = fopen("s.txt", "r");
      echo((fread($f, filesize("s.txt"))));
    }
  }
  else {
    if(file_exists("s.txt")) {
      unlink("s.txt");
    }
    $f = fopen("s.txt", "w+");
    fwrite($f, $_COOKIE["S"]);
    fclose($f);
    if(file_exists("m.txt")) {
      $f = fopen("m.txt", "r");
      echo((fread($f, filesize("m.txt"))));
    }
  }
}
?>