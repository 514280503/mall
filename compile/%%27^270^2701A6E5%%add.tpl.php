<?php /* Smarty version 2.6.26, created on 2018-03-31 13:46:16
         compiled from admin/commend/add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin/commend/add.tpl', 21, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/manage.css" />
<script type="text/javascript" src="view/admin/js/ajax.js"></script>
<script type="text/javascript" src="view/admin/js/commend.js"></script>
</head>
<body>

<h2><a href="?a=manage">返回项目评论列表</a>系统 -- 添加项目评论</h2>


<form method="post" name="add" action="?a=commend&m=add">
	<input type="hidden" name="flag" id="flag" />
	<dl class="form">
		<dd>项目名称：<select name="goods" id="goods">
                <option value="-1" selected="selected">--请选择一个项目--</option>
                <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['AllGoods']), $this);?>

            </select> <span class="red">[必填]</span></dd>
		<dd>用&ensp;户&ensp;名：<input type="text" name="user" id="user" class="text" /></dd>
		<dd>评论星级：<label for="star5"><input type="radio" id="star5" name="star" value="5" checked="checked" /> <span class="star">★★★★★</span></label>
            <label for="star4"><input type="radio" name="star" id="star4" value="4" /> <span class="star">★★★★</span></label>
            <label for="star3"><input type="radio" name="star" id="star3" value="3" /> <span class="star">★★★</span></label>
            <label for="star2"><input type="radio" name="star" id="star2" value="2" /> <span class="star">★★</span></label>
            <label for="star1"><input type="radio" name="star" id="star1" value="1" /> <span class="star">★</span></label> </dd>
		<dd>评论时间：<input type="text" name="date" class='ECalendar' id="ECalendar_case2"  value=""/> (时间不选则为当前时间)</dd>
        <dd>评论内容：<textarea type="text" name="content" style="width: 200px;"></textarea></dd>
		<dd><input type="submit" name="send"  value="新增项目评论" onclick="return addCommend()" class="submit" /></dd>
	</dl>
</form>
<script src="view/admin/js/jquery.min.js"></script>
<script src="view/admin/js/Ecalendar.jquery.min.js"></script>

</body>
</html>