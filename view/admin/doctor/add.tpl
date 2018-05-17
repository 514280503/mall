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

<h2><a href="?a=doctor">返回医生列表</a>系统 -- 添加医生</h2>


<form method="post" name="add" action="?a=doctor&m=add">
	<input type="hidden" name="flag" id="flag" />
	<input type="hidden" name="sid" value="{$OneNav[0]->id}" />
	<dl class="form">
		<dd>姓&ensp;&ensp;&ensp;&ensp;名：<input type="text" name="name"  id="name" onblur="checkName();" class="text" /></dd>
        <dd>地&ensp;&ensp;&ensp;&ensp;区：<select name="country" id="country">
                <option value="-1" selected="selected">--请选择一个地区--</option>
                {html_options options=$AllCountry}
            </select> <span class="red">[必填]</span>
        </dd>
        <dd>职务职称：<select name="position" id="position">
                <option value="-1" selected="selected">--请选择一个职务职称--</option>
                {html_options options=$AllPosition}
            </select> <span class="red">[必填]</span>
        </dd>
        <dd>从业年限：<select name="year" id="year">
                <option value="-1" selected="selected">--请选择一个从业年限--</option>
                {html_options options=$AllYear}
            </select> <span class="red">[必填]</span>
        </dd>
        <dd>上传图片：<input type="text" name="thumbnail" class="text" readonly="readonly" />
            <input type="button" value="上传图片" onclick="centerWindow('?a=call&m=upfile&type=content','upfile','400','150')" />
            <img name="pic" style="display:none;width: 200px;height: 200px;" /> ( * 保存图片完整性，  必须是jpg,gif,png，并且200k内)
        </dd>
        <dd>医生介绍：<textarea id="TextArea1" name="content" class="ckeditor"></textarea></dd>

		<dd><input type="submit" name="send" onclick="return addDoctor();" value="新增医生" class="submit" /></dd>
	</dl>
</form>


</body>
</html>