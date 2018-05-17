<?php /* Smarty version 2.6.26, created on 2018-03-22 15:37:11
         compiled from default/public/shop/header.tpl */ ?>

<div id="header">
	<h1><a href="./">西安叶子医疗美容医院商城</a></h1>

</div>
<div id="nav">
	<ul>

		<?php if ($_GET['id']): ?>
		<li><a href="./?a=shopf">首页</a></li>
		<?php else: ?>
		<li><a href="./?a=shopf" class="strong">首页</a></li>
        <?php endif; ?>
        <?php $_from = $this->_tpl_vars['FrontNav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
            <?php if ($this->_tpl_vars['value']->id == $this->_tpl_vars['FrontSonNav']['id']): ?>
                <li><a href="?a=shoplistf&id=<?php echo $this->_tpl_vars['value']->id; ?>
" class="strong"><?php echo $this->_tpl_vars['value']->name; ?>
</a></li>
            <?php else: ?>
                <li><a href="?a=shoplistf&id=<?php echo $this->_tpl_vars['value']->id; ?>
"><?php echo $this->_tpl_vars['value']->name; ?>
</a></li>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
	</ul>
</div>


<div id="search">

</div>