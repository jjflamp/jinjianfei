/**
 *  登录类js
 **/
var login;
login={
    check : function(){
        var username = $('input[name="username"]').val();
        var password =$('input[name="pwd"]').val();
        var verify = $('input[name="verify"]').val();
        if(!$.trim(username)){
            dialog.error('用户名不能为空');
        }
        else if(!$.trim(password)) {
            dialog.error('密码不能为空');
        }else if(!$.trim(username).match(/^[a-zA-Z1-9_]{5,12}$/) || !$.trim(password).match(/^[a-zA-Z1-9_~&*%#@]{6,12}/)) {
            dialog.error('账号或密码格式不正确');
        }
        var url="/index.php/admin/login/check";
        var data={'username' : $.trim(username),'password' : $.trim(password), 'verify' : $.trim(verify)};
        $.post(url,data,function(result){
            if(result.status==0){
                dialog.error(result.message);
            }
            if(result.status==1) {
                dialog.success(result.message,"/index.php/admin/index/index");
            }
        },'json');
    }
}