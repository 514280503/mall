function updatePrice() {
    var fm = document.update;

    if (fm.price_left.value == '') {
        alert('价格区间不得为空！');
        fm.price_left.focus();
        return false;
    }
    if (fm.price_right.value == '') {
        alert('价格区间不得为空！');
        fm.price_right.focus();
        return false;
    }

    if (fm.price_right.value.length < fm.price_left.value.length ) {
        alert('左区间价格必须小于右区间价格！');
        fm.price_right.focus();
        return false;
    }

    if (fm.flag.value != '') {
        alert('价格区间已存在！');
        fm.price_right.focus();
        return false;
    }
    return true;
}

function addPrice() {
	var fm = document.add;
	
	if (fm.price_left.value == '') {
		alert('价格区间不得为空！');
		fm.price_left.focus();
		return false;
	}
    if (fm.price_right.value == '') {
        alert('价格区间不得为空！');
        fm.price_right.focus();
        return false;
    }

    if (fm.price_right.value.length < fm.price_left.value.length ) {
        alert('左区间价格必须小于右区间价格！');
        fm.price_right.focus();
        return false;
    }

	if (fm.flag.value != '') {
		alert('价格区间已存在！');
		fm.price_right.focus();
		return false;
	}
	return true;
}


function checkName(){
    var price_left = document.getElementById("price_left");
    var price_right = document.getElementById("price_right");
    var flag = document.getElementById("flag");
    var ajax = new AjaxObj();
    ajax.swRequest({
        method:"POST",
        sync:false,
        url:'?a=year&m=isName',
        data: "{price_left:'" + price_left + "',price_right:'" + price_right + "'}",
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





