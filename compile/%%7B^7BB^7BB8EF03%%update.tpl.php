<?php /* Smarty version 2.6.26, created on 2018-03-27 09:21:15
         compiled from admin/doctor/update.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin/doctor/update.tpl', 21, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/nav.css" />
    <script type="text/javascript" src="view/admin/js/ajax.js"></script>
<script type="text/javascript" src="view/admin/js/doctor.js"></script>
    <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
</head>
<body>

<h2><a href="?a=doctor">返回医生列表</a>系统 -- 修改医生</h2>

<form method="post" name="update" action="?a=doctor&m=update&id=<?php echo $this->_tpl_vars['Onedoctor'][0]->id; ?>
">
	<input type="hidden" name="flag" id="flag" />
	<dl class="form">
		<dd>姓&ensp;&ensp;&ensp;&ensp;名：<input type="text" name="name" id="name"  class="text" value="<?php echo $this->_tpl_vars['Onedoctor'][0]->name; ?>
"/></span> </dd>
        <dd>地&ensp;&ensp;&ensp;&ensp;区：<select name="country" id="country">
                <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['AllCountry'],'selected' => $this->_tpl_vars['Onedoctor'][0]->country), $this);?>

            </select> <span class="red">[必填]</span>
        </dd>
        <dd>职务职称：<select name="position" id="position">
                <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['AllPosition'],'selected' => $this->_tpl_vars['Onedoctor'][0]->position), $this);?>

            </select> <span class="red">[必填]</span>
        </dd>
        <dd>从业年限：<select name="year" id="year">
                <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['AllYear'],'selected' => $this->_tpl_vars['Onedoctor'][0]->year), $this);?>

            </select> <span class="red">[必填]</span>
        </dd>
        <dd>上传图片：<input type="text" name="thumbnail" class="text" readonly="readonly" value="<?php echo $this->_tpl_vars['Onedoctor'][0]->thumbnail; ?>
"/>
            <input type="button" value="上传图片" onclick="centerWindow('?a=call&m=upfile&type=content','upfile','400','150')" />
            <img name="pic" style="display:block;width: 200px;height: 200px;" src="<?php echo $this->_tpl_vars['Onedoctor'][0]->thumbnail; ?>
"/> ( * 保存图片完整性，  必须是jpg,gif,png，并且200k内)
        </dd>
        <dd>医生介绍：<textarea id="TextArea1" name="content" class="ckeditor"><?php echo $this->_tpl_vars['Onedoctor'][0]->content; ?>
</textarea></dd>
		<dd><input type="submit" name="send" onclick="return updateDoctor();" value="修改医生" class="submit" /></dd>
	</dl>
</form>

</body>
</html>