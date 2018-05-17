function updateCommend() {
	var fm = document.update;


    if(fm.goods.value == -1){
        alert('请选择项目！');
        fm.goods.focus();
        return false;
    }

    if (fm.user.value == '') {
        alert('请添加用户名！');
        fm.user.focus();
        return false;
    }

    if (fm.content.value == '') {
        alert('请添加评论！');
        fm.content.focus();
        return false;
    }
	
	return true;
}

function addCommend() {
	var fm = document.add;

    if(fm.goods.value == -1){
        alert('请选择项目！');
        fm.goods.focus();
        return false;
    }

	if (fm.user.value == '') {
		alert('请添加用户名！');
		fm.user.focus();
		return false;
	}

	if (fm.content.value == '') {
		alert('请添加评论！');
		fm.content.focus();
		return false;
	}
	return true;
}


function checkUser(){
    var user = document.getElementById("user");
    var flag = document.getElementById("flag");
    var ajax = new AjaxObj();
    ajax.swRequest({
        method:"POST",
        sync:false,
        url:'?a=manage&m=isUser',
        data:"user="+user.value,
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

window.onload=function(){
    $("#ECalendar_case2").ECalendar({
        type:"time",
        offset:[0,2]
    });

}






