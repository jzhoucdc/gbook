<?php
include('input.php');
include('connect.php');


$content = $_POST['content'];
$user = $_POST['user'];

$input = new input();




$is = $input->post($content);
if ($is == false) 
{
	die('内容留言不能为空');
}

$is = $input->post($user);
if ($is == false) 
{
	die('用户名不能为空');
}

$time = time();
$sql = "INSERT into msg (content, user, intime) VALUES ('{$content}', '{$user}', $time)";
$db->query($sql);
header("location: gbook.php");

?>