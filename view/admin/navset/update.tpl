<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/nav.css" />
    <script type="text/javascript" src="view/admin/js/ajax.js"></script>
<script type="text/javascript" src="view/admin/js/navset.js"></script>
</head>
<body>

<h2><a href="?a=navset">返回导航列表</a>系统 -- 修改导航</h2>

<form method="post" name="update" action="?a=navset&m=update&id={$OneNavset[0]->id}">
	<input type="hidden" name="flag" id="flag" />
	<dl class="form">
		<dd>名&ensp;&ensp;&ensp;&ensp;称：<input type="text" name="name" id="name"  class="text" value="{$OneNavset[0]->name}"/></span> </dd>
        <dd>地&ensp;&ensp;&ensp;&ensp;址：<input type="text" name="url"   class="text" value="{$OneNavset[0]->url}"/></span></dd>
		<dd><input type="submit" name="send" onclick="return updateNavset();" value="修改导航" class="submit" /></dd>
	</dl>
</form>

</body>
</html>