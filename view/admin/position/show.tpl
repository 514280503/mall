<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/nav.css" />
</head>
<body>

<h2><a href="?a=position&m=add">添加职务</a>系统 -- 职务列表</h2>

<div id="list">
	<form method="post" action="?a=position&m=sort">
	<table>
		<tr><th>职务名称</th><th>排序</th><th>操作</th></tr>
		{foreach from=$Allposition key=key item=value}
		<tr><td>{$value->name}</td><td><input type="text" name="sort[{$value->id}]" class="sort" value="{$value->sort}" /></td><td><a href="?a=position&m=update&id={$value->id}"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a> <a href="?a=position&m=delete&id={$value->id}" onclick="return confirm('确认删除这个职务吗？') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a></td></tr>
		{foreachelse}
		<tr><td colspan="5">没有任何职务</td></tr>
		{/foreach}
		{if $Allposition}<tr><td></td><td><input type="submit" name="send" value="排序" /></td><td></td></tr>{/if}
	</table>
	</form>
</div>
<div id="page">{$page}</div>

</body>
</html>