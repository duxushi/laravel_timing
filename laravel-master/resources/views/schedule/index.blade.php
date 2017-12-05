<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
</head>
<body>
	<form action="index_do" method="post">
		<center>
			<table>
    		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
				<tr>
					<td>账号</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>密码</td>
					<td><input type="text" name="pas"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="提交"></td>
				</tr>
			</table>
		</center>
	</form>
</body>
</html>