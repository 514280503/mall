
<div id="header">
	<h1><a href="./">西安叶子医疗美容医院商城</a></h1>

</div>
<div id="nav">
	<ul>

		{if $smarty.get.id}
		<li><a href="./?a=shopf">首页</a></li>
		{else}
		<li><a href="./?a=shopf" class="strong">首页</a></li>
        {/if}
        {foreach from=$FrontNav key=key item=value}
            {if $value->id == $FrontSonNav.id}
                <li><a href="?a=shoplistf&id={$value->id}" class="strong">{$value->name}</a></li>
            {else}
                <li><a href="?a=shoplistf&id={$value->id}">{$value->name}</a></li>
            {/if}
        {/foreach}
	</ul>
</div>


<div id="search">

</div>