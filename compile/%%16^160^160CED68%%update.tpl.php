<?php /* Smarty version 2.6.26, created on 2018-03-25 15:35:14
         compiled from admin/goods/update.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin/goods/update.tpl', 43, false),array('function', 'html_radios', 'admin/goods/update.tpl', 56, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
    <link rel="stylesheet" type="text/css" href="view/admin/style/goods.css" />
    <script type="text/javascript" src="view/admin/js/ajax.js"></script>
    <script type="text/javascript" src="view/admin/js/goods_update.js"></script>
    <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
</head>
<body>

<h2><a href="?a=goods">返回项目列表</a>项目 -- 修改项目</h2>

<form method="post" name="update" action="?a=goods&m=update&id=<?php echo $this->_tpl_vars['OneGoods'][0]->id; ?>
">
    <input type="hidden" name="flag" id="flag" />
    <input type="hidden" name="brandid" id="brandid" value="<?php echo $this->_tpl_vars['OneGoods'][0]->brand; ?>
" />
    <dl class="form">
        <dd>项目类型：<select name="nav" id="nav">
                <option value="-1" selected="selected">--请选择一个项目的类型--</option>
                <?php $_from = $this->_tpl_vars['addNav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
                    <?php if ($this->_tpl_vars['value']['child'][0]['chlid2']): ?>
                    <option value="<?php echo $this->_tpl_vars['value']['id']; ?>
" disabled="disabled"><?php echo $this->_tpl_vars['value']['name']; ?>
</option>
                    <?php $_from = $this->_tpl_vars['value']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['value1']):
?>

                        <option value="<?php echo $this->_tpl_vars['value1']['id']; ?>
" disabled="disabled">----<?php echo $this->_tpl_vars['value1']['name']; ?>
</option>
                        <?php $_from = $this->_tpl_vars['value1']['chlid2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['value2']):
?>
                            <option value="<?php echo $this->_tpl_vars['value2']['id']; ?>
" <?php if ($this->_tpl_vars['value2']['id'] == $this->_tpl_vars['OneGoods'][0]->nav): ?>selected="selected"<?php endif; ?>>--------<?php echo $this->_tpl_vars['value2']['name']; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>

                    <?php endforeach; endif; unset($_from); ?>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </select> <span class="red">[必填]</span>
        </dd>
        <dd>项目品牌：<select name="brand" id="brand">
                <option value="-1" selected="selected">--请选择一个项目的品牌--</option>
            </select> <span class="red">[必填]</span>
        </dd>
        <dd>项目医生：<select name="doctor" id="doctor">
                <option value="-1" selected="selected">--请选择一个医生--</option>
                <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['AllDoctor'],'selected' => $this->_tpl_vars['OneGoods'][0]->doctor), $this);?>

            </select> <span class="red">[必填]</span>
        </dd>
        <dd>项目名称：<input type="text" name="name" class="text" value="<?php echo $this->_tpl_vars['OneGoods'][0]->name; ?>
"/> <span class="red">[必填]</span> ( * 2-100字符之间 )</dd>
        <dd>项目编号：<input type="text" name="sn" id="sn" onblur="checkSn();" class="text" value="<?php echo $this->_tpl_vars['OneGoods'][0]->sn; ?>
"/> <span class="red">[必填]</span> ( * 2-50字符之间，唯一 )</dd>
        <dd>叶&ensp;子&ensp;价：<input type="text" name="price_sale"  class="text small" value="<?php echo $this->_tpl_vars['OneGoods'][0]->price_sale; ?>
"/> 市&ensp;场&ensp;价：<input type="text" name="price_market"  class="text small" value="<?php echo $this->_tpl_vars['OneGoods'][0]->price_market; ?>
"/> 预&ensp;约&ensp;金：<input type="text" name="price_cost"  class="text small" value="<?php echo $this->_tpl_vars['OneGoods'][0]->price_cost; ?>
"/> </dd>
        <dd>关&ensp;键&ensp;字：<input type="text" name="keyword" class="text" value="<?php echo $this->_tpl_vars['OneGoods'][0]->keyword; ?>
"/> ( * 例：玻尿酸|肉毒素 每个关键字用'|'隔开)</dd>
        <dd>预约人数：<input type="text" name="sale_num" class="text small" value="<?php echo $this->_tpl_vars['OneGoods'][0]->sale_num; ?>
"/></dd>
        <dd>上传图片：<input type="text" name="thumbnail" class="text" readonly="readonly" value="<?php echo $this->_tpl_vars['OneGoods'][0]->thumbnail; ?>
" />
            <input type="button" value="上传图片" onclick="centerWindow('?a=call&m=upfile&type=content','upfile','400','150')" value="<?php echo $this->_tpl_vars['OneGoods'][0]->thumbnail; ?>
"/>
            <img name="pic" style="display:block;" src="<?php echo $this->_tpl_vars['OneGoods'][0]->thumbnail; ?>
" /> ( * 保存图片完整性，  必须是jpg,gif,png，并且200k内)
        </dd>
        <dd><textarea id="TextArea1" name="content" class="ckeditor"><?php echo $this->_tpl_vars['OneGoods'][0]->content; ?>
</textarea></dd>
        <dd>售后服务：<?php echo smarty_function_html_radios(array('name' => 'service','options' => $this->_tpl_vars['addService'],'checked' => $this->_tpl_vars['OneGoods'][0]->service), $this);?>
</dd>
        <dd>是否上架：<?php echo smarty_function_html_radios(array('options' => $this->_tpl_vars['bool'],'selected' => $this->_tpl_vars['OneGoods'][0]->is_up,'name' => 'is_up'), $this);?>
　　
        <dd><input type="submit" name="send" value="修改项目" onclick="return updateGoods();"/> <input type="reset" value="重置" /></dd>
    </dl>
</form>


</body>
</html>