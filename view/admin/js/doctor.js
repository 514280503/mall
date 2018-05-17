function updateDoctor() {
	var fm = document.update;
    if (fm.name.value == '') {
        alert('医生姓名不得为空！');
        fm.name.focus();
        return false;
    }
    if (fm.url.value == '') {
        alert('医生地址不得为空！');
        fm.url.focus();
        return false;
    }
    if (fm.content.value == '') {
        alert('请填写医生介绍！');
        fm.content.focus();
        return false;
    }

	return true;
}

function addDoctor() {
	var fm = document.add;
	
	if (fm.name.value == '') {
		alert('医生姓名不得为空！');
		fm.name.focus();
		return false;
	}

	if (fm.flag.value != '') {
		alert('医生姓名已存在！');
		fm.name.focus();
		return false;
	}

    if (fm.country.value == -1) {

        alert('请选择地区！');
        fm.country.focus();
        return false;
    }

    if (fm.position.value == -1) {
        alert('请选择医生职务！');
        fm.position.focus();
        return false;
    }
    if (fm.year.value == -1) {
        alert('请选择医生从业年限！');
        fm.year.focus();
        return false;
    }
    if (fm.content.value == '') {
        alert('请填写医生介绍！');
        fm.content.focus();
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
        url:'?a=doctor&m=isName',
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





