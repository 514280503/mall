<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/manage.css" />
</head>
<body>

<h2><a href="?a=commend&m=add">添加项目评论</a>系统 -- 项目评论列表</h2>

<div id="list">
	<table>
		<tr><th>项目</th><th>用户</th><th>评级星级</th><th>评论时间</th><th>操作</th></tr>
		{foreach from=$AllCommend key=key item=value}
		<tr><td>{$value->name}</td><td>{$value->user}</td><td>{$value->star}</td><td>{$value->date}</td><td><a href="?a=commend&m=update&id={$value->id}"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a> <a href="?a=commend&m=delete&id={$value->id}" onclick="return confirm('确认删除这个项目评论吗？') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a></td></tr>
		{foreachelse}
		<tr><td colspan="6">没有任何项目评论</td></tr>
		{/foreach}
	</table>
</div>
<div id="page">{$page}</div>

</body>
</html>