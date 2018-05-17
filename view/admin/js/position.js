function updatePosition() {
	var fm = document.update;
    if (fm.name.value == '') {
        alert('职务名称不得为空！');
        fm.name.focus();
        return false;
    }

	return true;
}

function addPosition() {
	var fm = document.add;
	
	if (fm.name.value == '') {
		alert('职务名称不得为空！');
		fm.name.focus();
		return false;
	}

	if (fm.flag.value != '') {
		alert('职务名称已存在！');
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
        url:'?a=position&m=isName',
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





