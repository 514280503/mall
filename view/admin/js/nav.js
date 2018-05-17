function updateNav() {
	var fm = document.update;
	if (fm.info.value.length > 200) {
		alert('分类简介不得大于200位！');
		fm.info.focus();
		return false;
	}
	return true;
}

function addNav() {
	var fm = document.add;
	
	if (fm.name.value == '') {
		alert('分类名称不得为空！');
		fm.name.focus();
		return false;
	}
	if (fm.name.value.length < 2) {
		alert('分类名称不得小于2位！');
		fm.name.focus();
		return false;
	}
	
	if (fm.info.value.length > 200) {
		alert('分类简介不得大于200位！');
		fm.info.focus();
		return false;
	}
	if (fm.flag.value != '') {
		alert('分类名称已存在！');
		fm.name.focus();
		return false;
	}
	return true;
}


function checkName(){
    var name = document.getElementById("name");
    var flag = document.getElementById("flag");
    var ajax = new AjaxObj();
    ajax.swRequest({
        method:"POST",
        sync:false,
        url:'?a=nav&m=isName',
        data:"name="+name.value,
        success: function(msg) {
            if(msg==1){
                flag.value = 'true';
            } else {
				flag.value = '';
			}
        },
        failure: function(a) {
            alert(a);
        },
        soap:this
    });
}





