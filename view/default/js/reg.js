function regUser() {
    var fm = document.reg;

    if (fm.user.value == '') {
        alert('手机号码不得为空！');
        fm.user.focus();
        return false;
    }

    var phoneReg = /(^1[3|4|5|7|8]\d{9}$)|(^09\d{8}$)/;

    if (!phoneReg.test(fm.user.value)) {
        alert('请输入有效的手机号码！');
        fm.user.focus();
        return false;
    }
    if (fm.pass.value.length < 6) {
        alert('密码不得小于6位！');
        fm.pass.focus();
        return false;
    }
    if (fm.pass.value != fm.notpass.value ) {
        alert('密码和确认密码必须保持一致！');
        fm.notpass.focus();
        return false;
    }
    if (fm.flag.value != '') {
        alert('手机号码已注册！');
        fm.user.focus();
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
        url:'?a=member&m=isUser',
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





