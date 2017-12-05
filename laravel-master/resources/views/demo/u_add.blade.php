<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加</title>
</head>
<body>
	<form action="u_add_do" method="post">
		<center>
			<table>
				<tr>
					<td>表提</td>
					<td><input type="text" name="d_name" value="" ></td>
				</tr>
				<tr>
					<td>内容</td>
					<td><textarea name="d_text"></textarea></td>
				</tr>
				<tr>
    
					<td><input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"></td>
					<td><input type="submit" value="提交"></td>
				</tr>
			</table>
		</center>
	</form>
</body>
</html>