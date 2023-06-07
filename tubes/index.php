<?php 
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require("functions.php");

$title = "Home";
$style = "style.css";

require("views/index.view.php");