<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/manage.css" />
</head>
<body>

<h2>系统 -- 预约列表</h2>

<div id="list">
	<table>
		<tr><th>用户名</th><th>电话</th><th>产品</th><th>提交时间</th></tr>
		{foreach from=$AllManage key=key item=value}
		<tr><td>{$value->user}</td><td>{$value->tel}</td><td>{$value->goods}</td><td>{$value->date}</td></tr>
		{foreachelse}
		<tr><td colspan="6">没有任何预约</td></tr>
		{/foreach}
	</table>
</div>
<div id="page">{$page}</div>

</body>
</html>