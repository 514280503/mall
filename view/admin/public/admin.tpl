<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/admin.css" />
<script type="text/javascript" src="view/admin/js/iframe.js"></script>
<script type="text/javascript" src="view/admin/js/channel.js"></script>
</head>
<body>

<div id="header">
	<p>您好，{$admin.user} [{$admin.level}] [<a href="?a=index" target="_blank">去首页</a>] [<a href="?a=admin&m=logout">退出</a>]</p>
	<ul>
		<li class="first"><a href="?a=admin&m=main" target="in">起始页</a></li>
		<li><a href="javascript:channel(0)">项目</a></li>
		<li><a href="javascript:channel(4)">日记</a></li>
		<li><a href="javascript:channel(5)">医生</a></li>
		<li><a href="javascript:channel(1)">预约</a></li>
		{*<li><a href="javascript:channel(2)">会员</a></li>*}
		<li><a href="javascript:channel(3)">系统</a></li>
	</ul>
</div>

<div id="sidebar">
	<dl style="display:block">
		<dt>项目</dt>
		<dd><a href="?a=nav" target="in">项目分类</a></dd>
		<dd><a href="?a=goods" target="in">项目列表</a></dd>
        <dd><a href="?a=brand" target="in">品牌列表</a></dd>
        <dd><a href="?a=price" target="in">价格区间</a></dd>
        <dd><a href="?a=service" target="in">售后服务</a></dd>
        <dd><a href="?a=commend" target="in">项目评价</a></dd>
	</dl>
	<dl style="display:none">
		<dt>预约</dt>
		<dd><a href="?a=appoint" target="in">预约列表</a></dd>
	</dl>
	<dl style="display:none">
		<dt>会员</dt>
		<dd><a href="###">会员列表</a></dd>
	</dl>
	<dl style="display:none">
		<dt>系统</dt>
		<dd><a href="?a=manage" target="in">管理员列表</a></dd>
		<dt>导航</dt>
		<dd><a href="?a=navset" target="in">导航设置</a></dd>
	</dl>
	<dl style="display:none">
		<dt>日记</dt>
		<dd><a href="?a=manage" target="in">日记列表</a></dd>
	</dl>
	<dl style="display:none">
		<dt>医生</dt>
		<dd><a href="?a=doctor" target="in">医生列表</a></dd>
        <dd><a href="?a=country" target="in">地区列表</a></dd>
        <dd><a href="?a=position" target="in">职务职称</a></dd>
        <dd><a href="?a=year" target="in">从业年限</a></dd>
	</dl>
</div>

<div id="main">
	<iframe src="?a=admin&m=main" frameborder="0" name="in"></iframe>
</div>

</body>
</html>