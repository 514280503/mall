<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
    <link rel="stylesheet" type="text/css" href="view/admin/style/nav.css" />
</head>
<body>

<h2><a href="?a=nav&m=add{if $OneNav}&id={$OneNav[0]->id}{/if}"">添加分类</a>系统 -- 分类列表</h2>

<div id="list">
    <form method="post" action="?a=nav&m=sort">
        <table>
            <tr><th>名称</th><th>简介</th><th>子类</th>{if $OneNav}<th>品牌</th>{/if}<th>排序</th><th>操作</th></tr>
            {foreach from=$AllNav key=key item=value}
                <tr>
                    <td>{$value->name}</td>
                    <td>{$value->info}</td>
                    <td><a href="?a=nav&sid={$value->id}">查看</a> | <a href="?a=nav&m=add&id={$value->id}">添加</a></td>
                    {if $OneNav}
                    <td>
                        {$value->brand}
                    </td>
                    {/if}
                    <td><input type="text" name="sort[{$value->id}]" class="sort" value="{$value->sort}" /></td>
                    <td><a href="?a=nav&m=update&id={$value->id}"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a> <a href="?a=nav&m=delete&id={$value->id}" onclick="return confirm('确认删除这个分类吗？') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a></td>
                </tr>
                {foreachelse}
                <tr><td colspan="5">没有任何分类</td></tr>
            {/foreach}
            {if $AllNav}<tr><td></td><td></td><td></td><td><input type="submit" name="send" value="排序" /></td><td></td></tr>{/if}
            {if $OneNav}<tr><td colspan="5">主类名称：[{$OneNav[0]->name}] <a href="?a=nav">[返回]</a></td></tr>{/if}
        </table>
    </form>
</div>
<div id="page">{$page}</div>

</body>
</html>