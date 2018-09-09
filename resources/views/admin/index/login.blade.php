<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<table border='1'>
			<tr>
				<td>编号</td>
				<td>名称</td>
				<td>操作</td>
			</tr>
			<?php foreach ($res['data'] as $key => $value): ?>
				<tr>
					<td><?php echo $value['t_id']?></td>
					<td><?php echo $value['name']?></td>
					<td><a href="#">删除</a></td>
				</tr>
			<?php endforeach ?>
		</table>
		<?php echo $res['str']?>
	</center>
</body>
</html>