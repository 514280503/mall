<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/nav.css" />
<script type="text/javascript" src="view/admin/js/ajax.js"></script>
<script type="text/javascript" src="view/admin/js/position.js"></script>
</head>
<body>

<h2><a href="?a=position">返回职务列表</a>系统 -- 添加职务</h2>


<form method="post" name="add" action="?a=position&m=add">
	<input type="hidden" name="flag" id="flag" />
	<dl class="form">
		<dd>职务名称：<input type="text" name="name"  id="name" onblur="checkName();" class="text" /></dd>
		<dd><input type="submit" name="send" onclick="return addPosition();" value="新增职务" class="submit" /></dd>
	</dl>
</form>


</body>
</html>