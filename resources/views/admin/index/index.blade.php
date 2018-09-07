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
			<td>id</td>
			<td>名称</td>
			<td>操作</td>
		</tr>
		<?php foreach ($data as $key => $v): ?>
			<tr>
				<td><?php echo $v['t_id']?></td>
				<td><?php echo $v['name']?></td>
				<td>
					<a href="{{url('admin/index/del')}}?id=<?php echo $v['t_id']?>">删除</a>||
					<a href="{{url('admin/index/upda')}}?id=<?php echo $v['t_id']?>">修改</a>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</center>
</body>
</html>