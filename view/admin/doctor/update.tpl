<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/nav.css" />
    <script type="text/javascript" src="view/admin/js/ajax.js"></script>
<script type="text/javascript" src="view/admin/js/doctor.js"></script>
    <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
</head>
<body>

<h2><a href="?a=doctor">返回医生列表</a>系统 -- 修改医生</h2>

<form method="post" name="update" action="?a=doctor&m=update&id={$Onedoctor[0]->id}">
	<input type="hidden" name="flag" id="flag" />
	<dl class="form">
		<dd>姓&ensp;&ensp;&ensp;&ensp;名：<input type="text" name="name" id="name"  class="text" value="{$Onedoctor[0]->name}"/></span> </dd>
        <dd>地&ensp;&ensp;&ensp;&ensp;区：<select name="country" id="country">
                {html_options options=$AllCountry selected=$Onedoctor[0]->country}
            </select> <span class="red">[必填]</span>
        </dd>
        <dd>职务职称：<select name="position" id="position">
                {html_options options=$AllPosition selected=$Onedoctor[0]->position}
            </select> <span class="red">[必填]</span>
        </dd>
        <dd>从业年限：<select name="year" id="year">
                {html_options options=$AllYear selected=$Onedoctor[0]->year}
            </select> <span class="red">[必填]</span>
        </dd>
        <dd>上传图片：<input type="text" name="thumbnail" class="text" readonly="readonly" value="{$Onedoctor[0]->thumbnail}"/>
            <input type="button" value="上传图片" onclick="centerWindow('?a=call&m=upfile&type=content','upfile','400','150')" />
            <img name="pic" style="display:block;width: 200px;height: 200px;" src="{$Onedoctor[0]->thumbnail}"/> ( * 保存图片完整性，  必须是jpg,gif,png，并且200k内)
        </dd>
        <dd>医生介绍：<textarea id="TextArea1" name="content" class="ckeditor">{$Onedoctor[0]->content}</textarea></dd>
		<dd><input type="submit" name="send" onclick="return updateDoctor();" value="修改医生" class="submit" /></dd>
	</dl>
</form>

</body>
</html>