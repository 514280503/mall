function loginUser() {
    var fm = document.login;

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
    if (fm.pass.value == '') {
        alert('密码不得为空！');
        fm.pass.focus();
        return false;
    }
    if (fm.ajaxlogin.value != '') {
        alert('手机号码或密码不正确！');
        fm.pass.focus();
        return false;
    }
    return true;


}


function checkLogin(){
    var user = document.getElementById("user");
    var pass = document.getElementById("pass");
    var ajaxlogin = document.getElementById("ajaxlogin");
    var ajax = new AjaxObj();
    ajax.swRequest({
        method:"POST",
        sync:false,
        url:'?a=member&m=ajaxLogin',
        data:"user="+user.value+"&pass="+pass.value,
        success: function(msg) {
            if(msg==1){
                ajaxlogin.value = 'true';
            } else {
                ajaxlogin.value = '';
            }
        },
        failure: function(a) {
            alert(a);
        },
        soap:this
    });
}
