var dialog;
dialog = {
    error: function (messags) {
        layer.open({
            content : messags,
            icon : 2,
            title : '错误提示',
        });
    },
    success : function (messags,url){
        layer.open({
            content : messags,
            icon : 1,
            yes : function (){
                location.href=url;
            },
        });
    },
    confirm : function (messags,url) {
        layer.open({
            content : messags,
            icon : 3,
            btn : ['是','否'],
            yes : function (){
                location.href=url;
            },
        });
    },
    onesuccess:function (messags) {
        layer.open({
            content : messags,
            icon : 1,
            title : '成功提示',

        });
    },
    toconfirm : function (messags) {
        layer.open({
            content : messags,
            icon : 3,
            btn : ['确定'],
        });
    },

    look : function (messags) {
        //页面层-自定义

        layer.open({
            type: 1,
            title: false,
            closeBtn: 0,
            shadeClose: true,
            skin: 'yourclass',
            content: '自定义HTML内容'
        });
    }
};