<?php

$host = '127.0.0.1';
$dbuser = 'root';
$pwd = 'root';
$dbname = 'php10';

$db = new mysqli($host, $dbuser, $pwd, $dbname);
if ($db->connect_errno <> 0) {
	echo "链接失败".$db->connect_errno;
}
$db->query("SET NAMES UTF8");




?>