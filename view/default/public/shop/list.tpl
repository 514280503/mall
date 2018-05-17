<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>在线商城</title>
    <link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
    <link rel="stylesheet" type="text/css" href="view/default/style/list.css" />
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
            <h2>项目筛选</h2>
            <div class="filter">

                <p>品牌：{if $smarty.get.brand}<a href="{$url}&brand=">全部</a>{else}<span>全部</span>{/if}
                    {foreach from=$FrontBrand key=key item=value}
                        {if $smarty.get.brand == $key}
                            <span>{$value}</span>
                        {else}
                            <a href="{$url}&brand={$key}">{$value}</a>
                        {/if}
                    {/foreach}
                </p>

                {if $FrontPrice[0]->price}
                <p>价格：{if $smarty.get.price}<a href="{$url}&price=">全部</a>{else}<span>全部</span>{/if}
                    {/if}
                    {foreach from=$FrontPrice[0]->price key=key item=value}
                        {if $smarty.get.price == $key}
                            <span>{$value}</span>
                        {else}
                            <a href="{$url}&price={$key}">{$value}</a>
                        {/if}
                    {/foreach}
                </p>
            </div>
            <h2>项目列表</h2>
     <div class="pro">
         {foreach from=$ListGoods key=key item=value}
         <dl>
            <dt><a href="?a=shopdetailf&id={$value->nav}&getid={$FrontSonNav.id}&goodsid={$value->id}"  ><img src="{$value->thumbnail}" height="220" width="220" alt="{$value->name}" title="{$value->name}" /></a></dt>
            <dd class="price"><strong>￥{$value->price_sale}</strong> <del>￥{$value->price_market}</del></dd>
            <dd class="title"><a href="?a=shopdetailf&id={$value->nav}&getid={$FrontSonNav.id}&goodsid={$value->id}" title="{$value->name}" >{$value->name|truncate:36}</a></dd>
            <dd class="commend"><a href="###">已有34人评价</a></dd>
            <dd class="buy"><a href="?a=shopdetailf&id={$value->nav}&getid={$FrontSonNav.id}&goodsid={$value->id}">预约</a> | <a href="###">收藏</a></dd>
        </dl>
         {/foreach}
         <div id="page">{$page}</div>
     </div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>