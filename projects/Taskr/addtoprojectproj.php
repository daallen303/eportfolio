<?php
ob_start();
require_once("task.class.php");
require_once("Config.php");

$task = new Task();

if(!empty($_POST)) $task->setProject($_POST["id"], $_POST["username"],$_POST["project"]);
header("Location: projects.php");
ob_flush();