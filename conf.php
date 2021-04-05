<?php
use DB\Database;
require 'class/Database.php';
//database config

//change here
$server = "localhost";
$dbUser = "dreamcre_dreamdb";
$dbPass = "S39pXqiAbUbW";
$dbName = "dreamc_dreamdb"; 
//db object
$DB = new Database(
	$server,
	$dbUser,
	$dbPass,
	$dbName
);

$SiteName = "Dream Creators";
$SiteUrl = $_SERVER['HTTP_HOST'];
session_start();