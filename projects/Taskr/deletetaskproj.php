<?php 
ob_start();
require_once("Config.php");
require_once("task.class.php");

$task = new Task();

$task->deleteTask($_POST["id"]);
header("Location: ./projects.php");
ob_flush();
