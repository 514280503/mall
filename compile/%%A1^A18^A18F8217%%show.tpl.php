<?php /* Smarty version 2.6.26, created on 2018-03-23 17:03:28
         compiled from admin/appoint/show.tpl */ ?>
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
		<?php $_from = $this->_tpl_vars['AllManage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
		<tr><td><?php echo $this->_tpl_vars['value']->user; ?>
</td><td><?php echo $this->_tpl_vars['value']->tel; ?>
</td><td><?php echo $this->_tpl_vars['value']->goods; ?>
</td><td><?php echo $this->_tpl_vars['value']->date; ?>
</td></tr>
		<?php endforeach; else: ?>
		<tr><td colspan="6">没有任何预约</td></tr>
		<?php endif; unset($_from); ?>
	</table>
</div>
<div id="page"><?php echo $this->_tpl_vars['page']; ?>
</div>

</body>
</html>