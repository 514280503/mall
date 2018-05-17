function updateCountry() {
	var fm = document.update;
    if (fm.name.value == '') {
        alert('地区名称不得为空！');
        fm.name.focus();
        return false;
    }

	return true;
}

function addCountry() {
	var fm = document.add;
	
	if (fm.name.value == '') {
		alert('地区名称不得为空！');
		fm.name.focus();
		return false;
	}

	if (fm.flag.value != '') {
		alert('地区名称已存在！');
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
        url:'?a=country&m=isName',
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





