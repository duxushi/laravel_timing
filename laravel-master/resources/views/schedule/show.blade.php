<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>设置日程</title>
</head>
<body>
	<form action="show_do" method="post">
		<center>
			<table>
    		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
				<tr>
					<td>日程标题</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>日程内容</td>
					<td><textarea name="text"></textarea></td>
				</tr>
				<tr>
					<td>日程提醒时间</td>
					<td>
						<input name="datatime" placeholder="请输入日期" class="laydate-icon" onClick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input id="sub" type="submit" value="提交"></td>
				</tr>
			</table>
	

		</center>
	</form>
</body>
<script src="{{ URL::asset('/jq.js') }}"></script>
<script>
	$(document).on('click', '#sub', function(){
		// alert(1);
	});
</script>

<script type="text/javascript" src="{{ URL::asset('/datatime') }}/js/laydate.js"></script>
<script type="text/javascript">
!function(){
	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
	laydate({elem: '#demo'});//绑定元素
}();

//日期范围限制
var start = {
    elem: '#start',
    format: 'YYYY-MM-DD',
    min: laydate.now(), //设定最小日期为当前日期
    max: '2099-06-16', //最大日期
    istime: true,
    istoday: false,
    choose: function(datas){
         end.min = datas; //开始日选好后，重置结束日的最小日期
         end.start = datas //将结束日的初始值设定为开始日
    }
};

var end = {
    elem: '#end',
    format: 'YYYY-MM-DD',
    min: laydate.now(),
    max: '2099-06-16',
    istime: true,
    istoday: false,
    choose: function(datas){
        start.max = datas; //结束日选好后，充值开始日的最大日期
    }
};
laydate(start);
laydate(end);


</script>


</html>