<?php /* Smarty version 2.6.26, created on 2018-03-31 14:37:07
         compiled from default/public/shop/detail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'default/public/shop/detail.tpl', 89, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>在线商城</title>
    <link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
    <link rel="stylesheet" type="text/css" href="view/default/style/details.css" />
    <script type="text/javascript" src="view/default/js/channel.js"></script>
    <script type="text/javascript" src="view/default/js/detail.js"></script>
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

    <?php $_from = $this->_tpl_vars['DetailsGoods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>

    <form method="post" action="?a=cart">
        <input type="hidden" name="goodsid" value="<?php echo $this->_tpl_vars['value']->id; ?>
" />
        <input type="hidden" name="name" value="<?php echo $this->_tpl_vars['value']->name; ?>
" />
        <input type="hidden" name="price_cost" value="<?php echo $this->_tpl_vars['value']->price_cost; ?>
" />
    <h2><?php echo $this->_tpl_vars['value']->name; ?>
</h2>
    <dl class="pic">
        <dt><img src="<?php echo $this->_tpl_vars['value']->thumbnail; ?>
" alt="<?php echo $this->_tpl_vars['value']->name; ?>
" title="<?php echo $this->_tpl_vars['value']->name; ?>
" width="300" height="300"/></dt>
        
    </dl>
    <dl class="text">
        <dd>售&ensp;&ensp;&ensp;&ensp;价：<span class="sale">￥<?php echo $this->_tpl_vars['value']->price_sale; ?>
</span><span class="market">￥<?php echo $this->_tpl_vars['value']->price_market; ?>
</span></dd>
        <?php if ($this->_tpl_vars['value']->brandname != '其他品牌'): ?><dd>品&ensp;&ensp;&ensp;&ensp;牌：<?php echo $this->_tpl_vars['value']->brandname; ?>
</dd><?php endif; ?>
        <dd>医&ensp;&ensp;&ensp;&ensp;生：<a href="###"><?php echo $this->_tpl_vars['value']->doctor_name; ?>
</a></dd>
        <dd>预约人数：<span class="sale_num"><?php echo $this->_tpl_vars['value']->sale_num; ?>
</span> </dd>
        <dd>预&ensp;约&ensp;金：<span class="gray">￥<?php echo $this->_tpl_vars['value']->price_cost; ?>
(到院再付：￥<?php echo smarty_function_math(array('equation' => "x - y",'x' => $this->_tpl_vars['value']->price_sale,'y' => $this->_tpl_vars['value']->price_cost), $this);?>
.00)</span></dd>
        <dd class="buy_button"><input type="submit" name="send" class="submit" value="" /> <img src="view/default/images/collect.gif" alt="收藏" title="收藏" /></dd>
    </dl>
    </form>
    <div class="content">
        <ul>
            <li id="button1" onclick="channel(1)" class="first">项目详情</li>
            <li id="button2" onclick="channel(2)">评价列表</li>
            <li id="button3" onclick="channel(3)">售后服务</li>
            <li id="button4" onclick="channel(4)" style="display: none;">售后服务</li>
        </ul>
        <div class="c1" id="c1" style="display:block;">
            <?php echo $this->_tpl_vars['value']->content; ?>

        </div>
        <div class="c2" id="c2" style="display:none;">
            <?php $_from = $this->_tpl_vars['Commend']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['value1']):
?>
                <div class="commend_left">
                    <p><?php echo $this->_tpl_vars['value1']->user; ?>
</p>
                    <p class="star">
                        <?php if ($this->_tpl_vars['value1']->star == 5): ?><span class="star">★★★★★</span><?php endif; ?>
                        <?php if ($this->_tpl_vars['value1']->star == 4): ?><span class="star">★★★★</span><?php endif; ?>
                        <?php if ($this->_tpl_vars['value1']->star == 3): ?><span class="star">★★★</span><?php endif; ?>
                        <?php if ($this->_tpl_vars['value1']->star == 2): ?><span class="star">★★</span><?php endif; ?>
                        <?php if ($this->_tpl_vars['value1']->star == 1): ?><span class="star">★</span><?php endif; ?>
                    </p>
                </div>
                <div class="commend_right">
                    <p><em><?php echo $this->_tpl_vars['value1']->date; ?>
</em><?php echo $this->_tpl_vars['value1']->content; ?>
</p>
                </div>
            <?php endforeach; endif; unset($_from); ?>
        </div>
        <div class="c3" id="c3" style="display:none;">
            <?php echo $this->_tpl_vars['value']->service; ?>

        </div>
        <div class="c4" id="c4" style="display:none;">
            <?php echo $this->_tpl_vars['value']->service; ?>

        </div>
    </div>
    <?php endforeach; endif; unset($_from); ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'default/public/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>