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
            {foreach from=$AllGoods key=key item=value}
                <tr><tr><td>{$value->name}</td><td>{$value->doctor}</td><td>{$value->price_sale}</td><td>{$value->price_cost}</td><td>{$value->nav_name}</td>
                <td>
                    {if $value->is_up == 0}
                        <a href="?a=goods&m=isUp&act=up&id={$value->id}"><span class="red">[已下架]</span></a>
                    {else}
                         <a href="?a=goods&m=isUp&act=down&id={$value->id}"><span class="green">[已上架]</span></a>
                    {/if}
                </td><td><input type="text" name="sort[{$value->id}]" class="sort" value="{$value->sort}" /></td><td><a href="?a=goods&m=update&id={$value->id}"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a> <a href="?a=goods&m=delete&id={$value->id}" onclick="return confirm('确认删除这个项目吗？') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a></td></tr>
                {foreachelse}
                <tr><td colspan="5">没有任何项目</td></tr>
            {/foreach}
            {if $AllGoods}<tr><td></td><td></td><td></td><td></td><td></td><td></td><td><input type="submit" name="send" value="排序" /></td><td></td></tr>{/if}

        </table>
    </form>
</div>
<div id="page">{$page}</div>

</body>
</html>