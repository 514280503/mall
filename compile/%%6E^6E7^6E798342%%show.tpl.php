<?php /* Smarty version 2.6.26, created on 2018-03-22 15:34:28
         compiled from admin/goods/show.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
    <link rel="stylesheet" type="text/css" href="view/admin/style/nav.css" />
</head>
<body>

<h2><a href="?a=goods&m=add">添加项目</a>系统 -- 项目列表</h2>

<div id="list">
    <form method="post" action="?a=goods&m=sort">
        <table>
            <tr><th>项目名称</th><th>项目医生</th><th>项目售价</th><th>预约金</th><th>项目类型</th><th>是否上架</th><th>排序</th><th>操作</th></tr>
            <?php $_from = $this->_tpl_vars['AllGoods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
                <tr><tr><td><?php echo $this->_tpl_vars['value']->name; ?>
</td><td><?php echo $this->_tpl_vars['value']->doctor; ?>
</td><td><?php echo $this->_tpl_vars['value']->price_sale; ?>
</td><td><?php echo $this->_tpl_vars['value']->price_cost; ?>
</td><td><?php echo $this->_tpl_vars['value']->nav_name; ?>
</td>
                <td>
                    <?php if ($this->_tpl_vars['value']->is_up == 0): ?>
                        <a href="?a=goods&m=isUp&act=up&id=<?php echo $this->_tpl_vars['value']->id; ?>
"><span class="red">[已下架]</span></a>
                    <?php else: ?>
                         <a href="?a=goods&m=isUp&act=down&id=<?php echo $this->_tpl_vars['value']->id; ?>
"><span class="green">[已上架]</span></a>
                    <?php endif; ?>
                </td><td><input type="text" name="sort[<?php echo $this->_tpl_vars['value']->id; ?>
]" class="sort" value="<?php echo $this->_tpl_vars['value']->sort; ?>
" /></td><td><a href="?a=goods&m=update&id=<?php echo $this->_tpl_vars['value']->id; ?>
"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a> <a href="?a=goods&m=delete&id=<?php echo $this->_tpl_vars['value']->id; ?>
" onclick="return confirm('确认删除这个项目吗？') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a></td></tr>
                <?php endforeach; else: ?>
                <tr><td colspan="5">没有任何项目</td></tr>
            <?php endif; unset($_from); ?>
            <?php if ($this->_tpl_vars['AllGoods']): ?><tr><td></td><td></td><td></td><td></td><td></td><td></td><td><input type="submit" name="send" value="排序" /></td><td></td></tr><?php endif; ?>

        </table>
    </form>
</div>
<div id="page"><?php echo $this->_tpl_vars['page']; ?>
</div>

</body>
</html>