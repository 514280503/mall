<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/manage.css" />
<script type="text/javascript" src="view/admin/js/commend.js"></script>
</head>
<body>

<h2><a href="?a=Commend">返回项目评论列表</a>系统 -- 修改项目评论</h2>

<form method="post" name="update" action="?a=commend&m=update&id={$OneCommend[0]->id}">
	<dl class="form">
        <dd>项目名称：<select name="goods" id="goods">
                <option value="-1" selected="selected">--请选择一个项目--</option>
                {html_options options=$AllGoods selected=$OneCommend[0]->goods}
            </select> <span class="red">[必填]</span></dd>
        <dd>用&ensp;户&ensp;名：<input type="text" name="user" id="user" class="text" value="{$OneCommend[0]->user}"/></dd>
        <dd>评论星级：<label for="star5"><input type="radio" id="star5" name="star" value="5" {if $OneCommend[0]->star == 5}checked="checked"{/if} /> <span class="star">★★★★★</span></label>
            <label for="star4"><input type="radio" name="star" id="star4" value="4" {if $OneCommend[0]->star == 4}checked="checked"{/if}/> <span class="star">★★★★</span></label>
            <label for="star3"><input type="radio" name="star" id="star3" value="3" {if $OneCommend[0]->star == 3}checked="checked"{/if}/> <span class="star">★★★</span></label>
            <label for="star2"><input type="radio" name="star" id="star2" value="2" {if $OneCommend[0]->star == 2}checked="checked"{/if}/> <span class="star">★★</span></label>
            <label for="star1"><input type="radio" name="star" id="star1" value="1" {if $OneCommend[0]->star == 1}checked="checked"{/if}/> <span class="star">★</span></label> </dd>
        <dd>评论时间：<input type="text" name="date" class='ECalendar' id="ECalendar_case2"  value="{$OneCommend[0]->date}"/> (时间不选则为当前时间)</dd>
        <dd>评论内容：<textarea type="text" name="content" style="width: 200px;">{$OneCommend[0]->content}</textarea></dd>
        <dd><input type="submit" name="send"  value="修改项目评论" onclick="return updateCommend()" class="submit" /></dd>

	</dl>
</form>
<script src="view/admin/js/jquery.min.js"></script>
<script src="view/admin/js/Ecalendar.jquery.min.js"></script>


</body>
</html>