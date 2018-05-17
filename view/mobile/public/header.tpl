<div id="header">
	<h1><a href="./">西安叶子医疗美容医院商城</a></h1>
	<div class="top">
		{if $smarty.cookies.user}
		您好，{$smarty.cookies.user}，欢迎再次光临，<a href="?a=member">个人中心</a> | <a href="?a=cart">购物车</a> | <a href="?a=member&m=logout">退出</a>
		{else}
		<a href="?a=member&m=login"><img src="view/default/images/bnt_log.gif" alt="登录" /></a>
		<a href="?a=member&m=reg"><img src="view/default/images/bnt_reg.gif" alt="注册" /></a>
		{/if}
	</div>
</div>
<div id="nav">
	<ul>
		{if $smarty.get.navid}
		<li><a href="./">首页</a></li>
		{else}
		<li><a href="./" class="strong">首页</a></li>
		{/if}
		{foreach from=$FrontTenNav key=key item=value}
		<li><a href="{$value->url}">{$value->name}</a></li>
		{/foreach}
	</ul>
</div>

<div id="search">
	<ul>
        <li>叶子商城精选</li>
        <li>全部项目</li>
    </ul>
</div>