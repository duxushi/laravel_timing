<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>展示</title>
</head>
<body>
	<form action="">
		<center>
			<table>
				<tr>
					<td>id</td>
					<td>标题</td>
					<td>内容</td>
					<td>时间</td>
					<td>发表人</td>
					<td>操作</td>
				</tr>
			@foreach ($list as $k => $v)
				<tr>
					<td>{{$v->d_id}}</td>
					<td>{{$v->d_name}}</td>
					<td>{{$v->d_text}}</td>
					<td>{{$v->d_time}}</td>
					<td>{{$v->u_id}}</td>
					<td>
						<a href="u_save?id={{ $v->d_id }}">修改</a>
						<a href="u_del?id={{ $v->d_id }}">删除</a>
					</td>
				</tr>
			@endforeach
				
				
			</table>
		</center>
	</form>
</body>
</html>