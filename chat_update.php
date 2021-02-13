<?php
include 'connection.php';
if(isset($_GET["id"])){
  $id = $_GET["id"];
  $sql = "UPDATE Chat SET r_check='0' WHERE id='$id'";
  if($con->query($sql) == TRUE){
    echo("done");
  }
  else {
    echo("Error");
  }
}
?>