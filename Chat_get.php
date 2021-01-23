<?php

$servername = "sql103.epizy.com";
$username = "epiz_26780025";
$password = "03327951445";
$dbname = "epiz_26780025_app";

$con = new mysqli($servername, $username, $password, $dbname);
if($con->connect_error){
    echo("Connection failed");
}

$sql = "SELECT * FROM Chat ORDER BY id";
$result = $con->query($sql);
$list = [];
if(isset($_GET['password']) && $result->num_rows>0){
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
    $ob->data = $list;
    $json = json_encode($ob);
    echo($json);
}

?>