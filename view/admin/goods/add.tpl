<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
    <link rel="stylesheet" type="text/css" href="view/admin/style/goods.css" />
    <script type="text/javascript" src="view/admin/js/ajax.js"></script>
    <script type="text/javascript" src="view/admin/js/goods.js"></script>
    <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
</head>
<body>

<h2><a href="?a=goods">返回项目列表</a>项目 -- 添加项目</h2>

<form method="post" name="add" action="?a=goods&m=add">
    <input type="hidden" name="flag" id="flag" />
    <dl class="form">
        <dd>项目类型：<select name="nav" id="nav">
                <option value="-1" selected="selected">--请选择一个项目的类型--</option>
                {foreach from=$addNav key=key item=value}
                    {if $value.child[0].chlid2}
                    <option value="{$value.id}" disabled="disabled">{$value.name}</option>
                    {foreach from=$value.child key=key1 item=value1}

                        <option value="{$value1.id}" disabled="disabled">----{$value1.name}</option>
                        {foreach from=$value1.chlid2 key=key2 item=value2}
                            <option value="{$value2.id}">--------{$value2.name}</option>
                        {/foreach}

                    {/foreach}
                    {/if}
                {/foreach}
            </select> <span class="red">[必填]</span>
        </dd>
        <dd>项目品牌：<select name="brand" id="brand">
                <option value="-1" selected="selected">--请选择一个项目的品牌--</option>
            </select> <span class="red">[必填]</span>
        </dd>
        <dd>项目医生：<select name="doctor" id="doctor">
                <option value="-1" selected="selected">--请选择一个医生--</option>
                {html_options options=$AllDoctor}
            </select> <span class="red">[必填]</span>
        </dd>
        <dd>项目名称：<input type="text" name="name" class="text" /> <span class="red">[必填]</span> ( * 2-100字符之间 )</dd>
        <dd>项目编号：<input type="text" name="sn" id="sn" onblur="checkSn();" class="text" /> <span class="red">[必填]</span> ( * 2-50字符之间，唯一 )</dd>
        <dd>叶&ensp;子&ensp;价：<input type="text" name="price_sale" value="0" class="text small" /> 市&ensp;场&ensp;价：<input type="text" name="price_market" value="0"  class="text small" /> 预&ensp;约&ensp;金：<input type="text" name="price_cost" value="0"  class="text small" /> </dd>
        <dd>关&ensp;键&ensp;字：<input type="text" name="keyword" class="text" /> ( * 例：玻尿酸|肉毒素 每个关键字用'|'隔开)</dd>
        <dd>预约人数：<input type="text" name="sale_num" class="text small" /></dd>
        <dd>上传图片：<input type="text" name="thumbnail" class="text" readonly="readonly" />
            <input type="button" value="上传图片" onclick="centerWindow('?a=call&m=upfile&type=content','upfile','400','150')" />
            <img name="pic" style="display:none;" /> ( * 保存图片完整性，  必须是jpg,gif,png，并且200k内)
        </dd>
        <dd><textarea id="TextArea1" name="content" class="ckeditor"></textarea></dd>
        <dd>售后服务：{html_radios name="service" options=$addService checked=$addServiceSelected}</dd>
        <dd>是否上架：<input type="radio" name="is_up" value="1" checked="checked" />是 <input type="radio" name="is_up" value="0" />否　　
        <dd><input type="submit" name="send" value="新增项目" onclick="return addGoods();"/> <input type="reset" value="重置" /></dd>
    </dl>
</form>


</body>
</html>