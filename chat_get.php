<?php
include 'connection.php';

$sql = "SELECT * FROM Chat ORDER BY id";
$result = $con->query($sql);
$obin = new stdClass();
$list = [];
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $obin->id = $row["id"];
        $obin->msg = $row["msg"];
        $obin->date_time = $row["date_time"];
        $obin->sender_id = $row["sender_id"];
        $obin->r_check = $row["r_check"];
        array_push($list, json_encode($obin));
    }
    foreach($list as $i => $val){
        $list[$i] = json_decode($val);
    }
    $ob = new stdClass();
    $ob->data = $list;
    $ob->st = "Found";
    $json = json_encode($ob);
    echo($json);
}
else {
  $ob = new stdClass();
  $ob->st = "Empty";
  $json = json_encode($ob);
  echo($json);
}

?>