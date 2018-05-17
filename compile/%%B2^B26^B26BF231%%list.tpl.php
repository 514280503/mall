<?php /* Smarty version 2.6.26, created on 2018-03-31 14:49:07
         compiled from default/public/shop/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'default/public/shop/list.tpl', 100, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>在线商城</title>
    <link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
    <link rel="stylesheet" type="text/css" href="view/default/style/list.css" />
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'default/public/shop/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="sait">
    当前位置：<a href="./">首页</a>
        &gt; <a href="?a=shoplistf&id=<?php echo $this->_tpl_vars['FrontSonNav']['id']; ?>
"><?php echo $this->_tpl_vars['FrontSonNav']['name']; ?>
</a>

</div>

<div id="sidebar">
    <h2><?php echo $this->_tpl_vars['FrontSonNav']['name']; ?>
</h2>
    <ul style="margin:0 0 10px 0">
        <?php $_from = $this->_tpl_vars['FrontSonNav']['two']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
            <li><a href="?a=shoplistf&id=<?php echo $this->_tpl_vars['value']->id; ?>
&getid=<?php echo $this->_tpl_vars['FrontSonNav']['id']; ?>
"><?php echo $this->_tpl_vars['value']->name; ?>
</a></li>
            <?php $_from = $this->_tpl_vars['value']->three; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['value2']):
?>
                <li><span class="gray">---</span><a href="?a=shoplistf&id=<?php echo $this->_tpl_vars['value2']->id; ?>
&getid=<?php echo $this->_tpl_vars['FrontSonNav']['id']; ?>
"><?php echo $this->_tpl_vars['value2']->name; ?>
</a></li>
            <?php endforeach; endif; unset($_from); ?>

        <?php endforeach; endif; unset($_from); ?>
    </ul>
    <h2>当月热销</h2>
    <div style="margin:0 0 10px 0">
        <dl style="border:none;">
            <dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price">￥158.00</dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
        </dl>
        <dl>
            <dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price">￥158.00</dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
        </dl>
        <dl>
            <dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price">￥158.00</dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
        </dl>
        <p><a href="###">查看更多</a></p>
    </div>
    <h2>浏览记录</h2>
    <div style="margin:0 0 10px 0">
        <dl style="border:none;">
            <dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price">￥158.00</dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
        </dl>
        <dl>
            <dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price">￥158.00</dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
        </dl>
        <dl>
            <dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" title="连衣裙" /></a></dt>
            <dd class="price">￥158.00</dd>
            <dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
        </dl>
        <p><a href="###">查看更多</a> <a href="###">清空</a></p>
    </div>
</div>

<div id="main">
            <h2>项目筛选</h2>
            <div class="filter">

                <p>品牌：<?php if ($_GET['brand']): ?><a href="<?php echo $this->_tpl_vars['url']; ?>
&brand=">全部</a><?php else: ?><span>全部</span><?php endif; ?>
                    <?php $_from = $this->_tpl_vars['FrontBrand']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
                        <?php if ($_GET['brand'] == $this->_tpl_vars['key']): ?>
                            <span><?php echo $this->_tpl_vars['value']; ?>
</span>
                        <?php else: ?>
                            <a href="<?php echo $this->_tpl_vars['url']; ?>
&brand=<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['value']; ?>
</a>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </p>

                <?php if ($this->_tpl_vars['FrontPrice'][0]->price): ?>
                <p>价格：<?php if ($_GET['price']): ?><a href="<?php echo $this->_tpl_vars['url']; ?>
&price=">全部</a><?php else: ?><span>全部</span><?php endif; ?>
                    <?php endif; ?>
                    <?php $_from = $this->_tpl_vars['FrontPrice'][0]->price; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
                        <?php if ($_GET['price'] == $this->_tpl_vars['key']): ?>
                            <span><?php echo $this->_tpl_vars['value']; ?>
</span>
                        <?php else: ?>
                            <a href="<?php echo $this->_tpl_vars['url']; ?>
&price=<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['value']; ?>
</a>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </p>
            </div>
            <h2>项目列表</h2>
     <div class="pro">
         <?php $_from = $this->_tpl_vars['ListGoods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
         <dl>
            <dt><a href="?a=shopdetailf&id=<?php echo $this->_tpl_vars['value']->nav; ?>
&getid=<?php echo $this->_tpl_vars['FrontSonNav']['id']; ?>
&goodsid=<?php echo $this->_tpl_vars['value']->id; ?>
"  ><img src="<?php echo $this->_tpl_vars['value']->thumbnail; ?>
" height="220" width="220" alt="<?php echo $this->_tpl_vars['value']->name; ?>
" title="<?php echo $this->_tpl_vars['value']->name; ?>
" /></a></dt>
            <dd class="price"><strong>￥<?php echo $this->_tpl_vars['value']->price_sale; ?>
</strong> <del>￥<?php echo $this->_tpl_vars['value']->price_market; ?>
</del></dd>
            <dd class="title"><a href="?a=shopdetailf&id=<?php echo $this->_tpl_vars['value']->nav; ?>
&getid=<?php echo $this->_tpl_vars['FrontSonNav']['id']; ?>
&goodsid=<?php echo $this->_tpl_vars['value']->id; ?>
" title="<?php echo $this->_tpl_vars['value']->name; ?>
" ><?php echo ((is_array($_tmp=$this->_tpl_vars['value']->name)) ? $this->_run_mod_handler('truncate', true, $_tmp, 36) : smarty_modifier_truncate($_tmp, 36)); ?>
</a></dd>
            <dd class="commend"><a href="###">已有34人评价</a></dd>
            <dd class="buy"><a href="?a=shopdetailf&id=<?php echo $this->_tpl_vars['value']->nav; ?>
&getid=<?php echo $this->_tpl_vars['FrontSonNav']['id']; ?>
&goodsid=<?php echo $this->_tpl_vars['value']->id; ?>
">预约</a> | <a href="###">收藏</a></dd>
        </dl>
         <?php endforeach; endif; unset($_from); ?>
         <div id="page"><?php echo $this->_tpl_vars['page']; ?>
</div>
     </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'default/public/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>