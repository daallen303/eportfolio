<?php
require_once("session.class.php");

$session = new Session();

$host = "mysql.daallen.xyz";
$user = "danall38";
$pass = "Blackpen1!";
$db = "daallen_eportfolio";

/*
$host = "localhost";
$user = "root";
$pass = "Da#1005576";
$db = "diorios";
* */
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$opt = [
	PDO::ATTR_ERRMODE                  =>PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE       =>PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES         =>false,  
];

$pdo = new PDO($dsn, $user, $pass, $opt);



