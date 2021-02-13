<?php
include 'connection.php';

if(isset($_GET['password'])){
    $data = $_GET["jsonData"];
    $json = json_decode($data);
    $sql = "INSERT INTO Chat (msg, date_time, sender_id, r_check) VALUES ('$json->msg', '$json->date', '$json->sender', '$json->r')";
    if($con->query($sql)){
        echo('done');
    }
    else{
        echo('Failed to send message');
    }
}

?>