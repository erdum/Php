<?php

$servername = 'sql103.epizy.com';
$username = 'epiz_26780025';
$password = '03327951445';
$dbname =  'epiz_26780025_app';

$con = new mysqli($servername, $username, $password, $dbname);
if($con->connect_error){
    echo('Connection failed');
}

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