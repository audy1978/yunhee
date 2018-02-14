<?php
/*
* set var
*/
$cfHost = "localhost";
$cfUser = "yanhee";
$cfPassword = "yanhee2017";
$cfDatabase = "yanhee";
 
/*
* connection mysql
*/
$meConnect = mysql_connect($cfHost,$cfUser,$cfPassword) or die("Error conncetion mysql...");
$meDatabase = mysql_select_db($cfDatabase);
mysql_query("SET NAMES UTF8");
?>