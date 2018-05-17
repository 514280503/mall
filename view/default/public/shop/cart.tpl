<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>在线商城</title>
    <link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
    <link rel="stylesheet" type="text/css" href="view/default/style/reg_cart.css" />
</head>
<body>
{include file='default/public/shop/header.tpl'}
<div id="sait">
    当前位置：<a href="./">首页</a> &gt; 预约
</div>


<div id="reg">
    <form action="?a=cart&m=addProduct" method="post" name="reg">
        <input type="hidden" name="prePage" value="{$prePage}">

        <input type="hidden" name="goodsId" value="{$GoodsId}">
        <input type="hidden" name="flag" id="flag" />
        <dl>
            <dd>项目名称：<input type="text" name="goods" class="text" id="goods"  readonly="true"  value="{$GoodsName}" width="100%"/></dd>
            <dd>姓&ensp;&ensp;&ensp;&ensp;名：<input type="text" name="user" class="text" /></dd>
            <dd>联系电话：<input type="text" name="tel" class="text" id="tel"/></dd>
            <dd>备&ensp;&ensp;&ensp;&ensp;注：<textarea rows="3" cols="93" name="text"></textarea></dd>
            <dd><input type="submit" name="send" value="预约" class="submit" onclick="return regUser();"/></dd>
        </dl>
    </form>
</div>

{include file='default/public/footer.tpl'}

</body>
</html>