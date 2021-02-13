<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

$con = new mysqli($servername, $username, $password, $dbname);
if($con->connect_error){
    echo("Connection failed");
}
?>