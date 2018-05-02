
/**
 * form表单 ajax post请求
 *
 * @param actionUrl 跳转url地址
 */
function postAjax(actionUrl = ''){
    $(document).on('click', '.post-ajax', function(){
        var url = $('form').attr('action');
        var data = $('form').serialize();
        // console.log(data);
        // return ;
        $.ajax({
            url : url,
            data : data,
            type : 'post',
            dataType : 'json',
            success : function(res){
                if(res.code){
                    // 返回错误代码，提示错误消息
                    if(res.code !== 200){
                        layer.msg(res.msg,{time: 1500});
                        return false;
                    }else if(res.code == 200){
                        // 返回成功
                        layer.msg(res.msg,{time: 1500},function(){
                            if(actionUrl){
                                window.location.href = actionUrl;
                            }
                        });
                    }
                }
                return false;
            },
            error : function(){
                layer.msg('请求失败，请稍后再试',{time: 1000});
            }
        })
    })
}


// 监听回车提交
$(document).keyup(function(event){
    if(event.keyCode == 13){
        for(var i = 0; i < $('input').length; i++){
            if(!$("input:eq("+i+")").val()){
                $("input:eq("+i+")").focus();
                return false;
            }
        }
        $('submit').click();
    }
});


// 非标单提交方法
function customPost(url, data='')
{
    $.ajax({
        url : url,
        type : 'post',
        dataType : 'json',
        success : function (res){
            if(res.code){
                // 返回错误代码，提示错误消息
                if(res.code !== 200){
                    layer.msg(res.msg,{time: 1500});
                    return false;
                }else if(res.code == 200){
                    // 返回成功
                    layer.msg(res.msg,{time: 1500},function(){
                        window.location.reload();
                    });
                }
            }
        },
        error : function()
        {
            layer.msg('请求失败，请稍后再试',{time: 1000});
        }
    })

}




