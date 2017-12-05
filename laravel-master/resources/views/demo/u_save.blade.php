<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改</title>
</head>
<body>
	<form action="u_save_do" method="post">
		<center>
			<table>
				<tr>
					<td>表提</td>
					<td><input type="text" name="d_name" value="{{ $list->d_name }}" ></td>
				</tr>
				<tr>
					<td>内容</td>
					<td><textarea name="d_text">{{ $list->d_text }}</textarea></td>
				</tr>
				<tr>
    
					<td><input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
						<input type="hidden" name="d_id" value="{{ $list->d_id }}"></td>
					<td><input type="submit" value="提交"></td>
				</tr>
			</table>
		</center>
	</form>
</body>
</html>