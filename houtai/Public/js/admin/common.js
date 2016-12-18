/*
添加按钮操作
 */
$().on('click',function(){
   var url=SCOPE.add_url;
   window.location.href=url;
});

/*
* 提交form表单操作
*/

$("#singcms-button-submit").click(function (){
   var data =$("#singcms-form").serializeArray();
   postData = {};
    $(data).each(function(i){
        postData[this.name] = this.value;
   });
    var url = SCOPE.save_url;
   var jump_url= SCOPE.jump_url;

    $.post(url,postData,function(result) {
       if(result.status == 1){
           // 成功
           return dialog.success (result.message,jump_url);
       }else if(result.status == 0) {
           // 失败
           return dialog.error (result.message);
       }
   },'json')
});

/*
*   form 模态框ajax
*/
// $('#bootSave-submit').click(function (){
//     var url=SCOPE.bootSave_url;
//     $('#bootSave-form').attr('action='.url);
    // var data={};
    // data['id']=$("#bootSave-form input:eq(0)").val();
    // data['bh']=$('#bootSave-form').find("input:eq(1)").val();
    // var num=$('#bootSave-form').find("input:eq(1)").val();
    // $.post(url,{'num':num},function(result) {
    //     return dialog.error (result.message);
    // },'json')

// });

/*
*   ajax传值
*/
$('.admin-lock').on('click',function(){
    var url=SCOPE.save_url;
    var data=$(this).parents('tr').attr('info');
    var info=$(this).attr('info');
    $.post(url,{'id':data,  },function(result) {
        // if(result.status==1){
        console.log(result);
            dialog.onesuccess(result.message);

        // }
    });
})

/*
*编辑模型
 */
$('').on('click',function(){
    var id=$(this).attr('attr-id');
    var url = SCOPE.edit_url+'&id='+id;
    window.location.href=url;
});

/*
* 删除操作
 */
$('.set-status').on('click',function (){
    var id=$(this).attr('attr-id');
    var message=$(this).attr('attr-message');
    var status=$(this).attr('attr-status');
    var url =SCOPE.status_url;

    data ={};
    data['id']=id;
    data['status']=status;
    layer.open({
        type : 0,
        title : '是否提交？',
        btn : ['是','否'],
        icon : 3,
        closeBtn : 2,
        content : '是否确定'+message,
        scrollbar : true,
        yes : function() {
            todelete(url, data);
        },
    });
});
function todelete(url, data) {
    $.post(url, data, function (s) {
            if (s.status == 1) {
                return dialog.success(s.message, '');
                // 跳转到相关页面
            } else {
                return dialog.error(s.message);
            }
        }, "JSON");
};

function bootsave(id){
    var url=SCOPE.bootsave;
    $.post(url,{'id':id},function(r){
        if(r.status==1){
            return dialog.success(r.message,SCOPE.edit_url+'?id='+id);
        }else{
            return dialog.error(r.message);
        }

    },'JSON');

};



























