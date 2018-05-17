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
{include file='default/public/shop/header.tpl'}
<div id="sait">
    当前位置：<a href="./">首页</a>
    &gt; <a href="?a=shoplistf&id={$FrontSonNav.id}">{$FrontSonNav.name}</a>

</div>

<div id="sidebar">
    <h2>{$FrontSonNav.name}</h2>
    <ul style="margin:0 0 10px 0">
        {foreach from=$FrontSonNav.two key=key item=value}
            <li><a href="?a=shoplistf&id={$value->id}&getid={$FrontSonNav.id}">{$value->name}</a></li>
            {foreach from=$value->three key=key2 item=value2}
                <li><span class="gray">---</span><a href="?a=shoplistf&id={$value2->id}&getid={$FrontSonNav.id}">{$value2->name}</a></li>
            {/foreach}

        {/foreach}
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

    {foreach from=$DetailsGoods key=key item=value}

    <form method="post" action="?a=cart">
        <input type="hidden" name="goodsid" value="{$value->id}" />
        <input type="hidden" name="name" value="{$value->name}" />
        <input type="hidden" name="price_cost" value="{$value->price_cost}" />
    <h2>{$value->name}</h2>
    <dl class="pic">
        <dt><img src="{$value->thumbnail}" alt="{$value->name}" title="{$value->name}" width="300" height="300"/></dt>
        {*<dd>分享至：新浪微博 | 腾讯微博 | 人人网 | 开心网</dd>*}

    </dl>
    <dl class="text">
        <dd>售&ensp;&ensp;&ensp;&ensp;价：<span class="sale">￥{$value->price_sale}</span><span class="market">￥{$value->price_market}</span></dd>
        {if $value->brandname != '其他品牌'}<dd>品&ensp;&ensp;&ensp;&ensp;牌：{$value->brandname}</dd>{/if}
        <dd>医&ensp;&ensp;&ensp;&ensp;生：<a href="###">{$value->doctor_name}</a></dd>
        <dd>预约人数：<span class="sale_num">{$value->sale_num}</span> </dd>
        <dd>预&ensp;约&ensp;金：<span class="gray">￥{$value->price_cost}(到院再付：￥{math equation="x - y" x=$value->price_sale y=$value->price_cost}.00)</span></dd>
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
            {$value->content}
        </div>
        <div class="c2" id="c2" style="display:none;">
            {foreach from=$Commend key=key1 item=value1}
                <div class="commend_left">
                    <p>{$value1->user}</p>
                    <p class="star">
                        {if $value1->star == 5}<span class="star">★★★★★</span>{/if}
                        {if $value1->star == 4}<span class="star">★★★★</span>{/if}
                        {if $value1->star == 3}<span class="star">★★★</span>{/if}
                        {if $value1->star == 2}<span class="star">★★</span>{/if}
                        {if $value1->star == 1}<span class="star">★</span>{/if}
                    </p>
                </div>
                <div class="commend_right">
                    <p><em>{$value1->date}</em>{$value1->content}</p>
                </div>
            {/foreach}
        </div>
        <div class="c3" id="c3" style="display:none;">
            {$value->service}
        </div>
        <div class="c4" id="c4" style="display:none;">
            {$value->service}
        </div>
    </div>
    {/foreach}
</div>
{include file='default/public/footer.tpl'}
</body>
</html>