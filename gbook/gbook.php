<?php
include('connect.php');

$sql = "SELECT * FROM msg ORDER BY id DESC";
$mysqli_result = $db->query($sql);

if ($mysqli_result === false) {
	die("sql错误");
}
while ($row = $mysqli_result->fetch_array(MYSQLI_ASSOC)) {

	$rows[] = $row;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>留言本</title>
		<link rel="stylesheet" type="text/css" href="style.css" /> 
	</head>
	<body>
		<div class='wrap'>
			<!-- 发表留言 -->
			<div class='add'>
				<form action="save.php" method="post">
					<textarea class='content' cols='50' rows='5' name="content"></textarea>
					<input class='user' type='text' name="user" />
					<input class='btn' type='submit' value='发表留言' />
				</form>
			</div>

<?php
	foreach ($rows as $x) {
?>
			<!-- 查看留言 -->
			<div class='msg'>
				<div class='info'>
					<span class='user'><?php echo $x['user']; ?></span>
					<span class='time'><?php echo date("Y-m-d H:i:s", $x['intime']);  ?></span>
				</div>
				<div class='content'>
					<?php echo $x['content'] ?>
				</div>
			</div>
	<?php
}
	?>							
		</div>
	</body>
</html>