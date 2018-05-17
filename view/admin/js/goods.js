window.onload = function () {
    var nav = $('nav');
    nav.onchange = function () {
        changeNav(this.value);
    };
};


function changeNav(id){
    var brand = $('brand');
    var ajax = new AjaxObj();
    ajax.swRequest({
        method:"GET",
        sync:false,
        url:'?a=goods&m=getBrand&id='+id,
        success: function(msg) {
            var a = msg.split(':');
            brand.options.length = 1;
            for (var i=0;i<a.length;i=i+2) {
                brand.options.add(new Option(a[i+1], a[i]));
            }
        },
        failure: function(a) {
            alert(a);
        },
        soap:this
    });
}



function $(id) {
    return document.getElementById(id);
}

function addGoods() {
    var fm = document.add;
    if (fm.nav.value == -1) {
        alert('项目类型必须选择！');
        fm.nav.focus();
        return false;
    }
    if (fm.brand.value == -1) {
        alert('项目品牌必须选择！');
        fm.brand.focus();
        return false;
    }
    if (fm.name.value == '') {
        alert('项目名称不得为空！');
        fm.name.focus();
        return false;
    }
    if (fm.name.value.length < 2) {
        alert('项目名称不得小于2位！');
        fm.name.focus();
        return false;
    }

    if (fm.sn.value == '') {
        alert('项目编号不得为空！');
        fm.sn.focus();
        return false;
    }
    if (fm.sn.value.length < 2) {
        alert('项目编号不得小于2位！');
        fm.sn.focus();
        return false;
    }

    if (fm.flag.value != '') {
        alert('项目编号已存在！');
        fm.name.focus();
        return false;
    }
    return true;
}

function checkSn(){
    var sn = document.getElementById("sn");
    var flag = document.getElementById("flag");
    var ajax = new AjaxObj();
    ajax.swRequest({
        method:"POST",
        sync:false,
        url:'?a=goods&m=isSn',
        data:"sn="+sn.value,
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
