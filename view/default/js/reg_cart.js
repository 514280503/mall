function regUser() {
    var fm = document.reg;

    if (fm.tel.value == '') {
        alert('联系方式不得为空！');
        fm.tel.focus();
        return false;
    }
    if (fm.goods.value == '') {
        alert('请选择产品！');
        fm.goods.focus();
        return false;
    }
    if (fm.user.value == '') {
        alert('请输入姓名！');
        fm.user.focus();
        return false;
    }
    if (fm.user.value.length < 2) {
        alert('请输入有效姓名');
        fm.user.focus();
        return false;
    }

    var phoneReg = /(^1[3|4|5|7|8]\d{9}$)|(^09\d{8}$)/;

    if (!phoneReg.test(fm.tel.value)) {
        alert('请输入有效的手机号码！');
        fm.tel.focus();
        return false;
    }

    return true;
}






