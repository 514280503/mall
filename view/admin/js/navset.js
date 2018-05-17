function updateNavset() {
	var fm = document.update;
    if (fm.name.value == '') {
        alert('导航名称不得为空！');
        fm.name.focus();
        return false;
    }
    if (fm.url.value == '') {
        alert('导航地址不得为空！');
        fm.url.focus();
        return false;
    }

	return true;
}

function addNavset() {
	var fm = document.add;
	
	if (fm.name.value == '') {
		alert('导航名称不得为空！');
		fm.name.focus();
		return false;
	}
    if (fm.url.value == '') {
        alert('导航地址不得为空！');
        fm.url.focus();
        return false;
    }

	if (fm.flag.value != '') {
		alert('导航名称已存在！');
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
        url:'?a=navset&m=isName',
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





