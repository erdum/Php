<?php
session_start();
if(isset($_GET["data"])){
    $data = json_decode($_GET["data"]);
    if($data->id == "M") {
        $_SESSION["m_status"] = $_GET["data"];
        if(isset($_SESSION["s_status"])) {
            echo($_SESSION["s_status"]);
        }
        else {
            echo("");
        }
    }
    else {
        $_SESSION["s_status"] = $_GET["data"];
        if(isset($_SESSION["m_status"])) {
            echo($_SESSION["m_status"]);
        }
        else {
            echo("");
        }
    }
}
?>