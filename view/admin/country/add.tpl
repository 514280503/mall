<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/nav.css" />
<script type="text/javascript" src="view/admin/js/ajax.js"></script>
<script type="text/javascript" src="view/admin/js/country.js"></script>
</head>
<body>

<h2><a href="?a=country">返回地区列表</a>系统 -- 添加地区</h2>


<form method="post" name="add" action="?a=country&m=add">
	<input type="hidden" name="flag" id="flag" />
	<input type="hidden" name="sid" value="{$OneNav[0]->id}" />
	<dl class="form">
		<dd>地区名称：<input type="text" name="name"  id="name" onblur="checkName();" class="text" /></dd>
		<dd><input type="submit" name="send" onclick="return addCountry();" value="新增地区" class="submit" /></dd>
	</dl>
</form>


</body>
</html>