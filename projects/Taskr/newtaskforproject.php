<?php
ob_start();
require_once("Config.php");
require_once("task.class.php");
$task = new Task();
if(!empty($_POST))$task->saveTask(null,$_POST["name"],$_POST["description"], $_POST["priority"], 0, "Daniel", $_POST["project"]);
header("Location: projects.php");
ob_flush();