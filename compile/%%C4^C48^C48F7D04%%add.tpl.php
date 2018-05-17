<?php /* Smarty version 2.6.26, created on 2018-03-26 14:06:16
         compiled from admin/price/add.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
    <link rel="stylesheet" type="text/css" href="view/admin/style/price.css" />
    <script type="text/javascript" src="view/admin/js/ajax.js"></script>
    <script type="text/javascript" src="view/admin/js/price.js"></script>
</head>
<body>

<h2><a href="?a=price">返回价格区间列表</a>项目 -- 添加价格区间</h2>

<form method="post" name="add" action="?a=price&m=add">
    <input type="hidden" name="flag" id="flag" />
    <dl class="form">
        <dd>价格区间：<input type="text" name="price_left" value="0" class="text small" id="price_left"/> - <input type="text" id="price_right" name="price_right" value="0" class="text small" onblur="checkName();"/> <span class="red">[必填]</span> ( * 不得为0、必须是数字、左区间必须小于右区间 )</dd>
        <dd><input type="submit" name="send" onclick="return addPrice();" value="新增价格区间" class="submit" /></dd>
    </dl>
</form>

</body>
</html>