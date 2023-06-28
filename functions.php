<?php 
include("config.php");

function register ($_REQUEST) {

    $action = $_REQUEST["user_action"];

    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = md5($_POST["pass"]);
    $date_birth = $_POST["date_birth"];





};

?>
