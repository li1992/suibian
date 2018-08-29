<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php foreach ($data as $key => $v): ?>
		<p><?php echo $v['name']?></p>
<?php endforeach ?>
	<p><?php echo $arr ?></p>
</body>
</html>