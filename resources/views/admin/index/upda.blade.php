<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<form action="update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="<?php echo $res[0]['t_id']?>">
		名称：<input type="text" name="name" value="<?php echo $res[0]['name']?>">
		<input type="submit" value="确定">
		</form>
	</center>
</body>
</html>