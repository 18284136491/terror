
/**
 * form表单 ajax post请求
 *
 * @param actionUrl 跳转url地址
 */
function postAjax(actionUrl = '', parent = '')
{
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
                    }
                    // 返回成功
                    layer.msg(res.msg,{time: 1500},function(){
                        if(actionUrl){
                            if(parent){
                                parent.location.reload();
                            }else{
                                window.location.href = actionUrl;
                            }
                        }
                    });
                }
                return false;
            },
            error : function(){
                layer.msg('请求失败，请稍后再试',{time: 1000});
            }
        })
    })
}

// 文件上传
function postFile(actionUrl)
{
        console.log(11)
    $(document).on('click', '.post-file', function(){
        console.log(22)
        var url = $('form').attr('action');
        var data = new FormData($('#form')[0]);
        $.ajax({
            url : url,
            data : data,
            type : 'post',
            dataType : 'json',
            cache: false,
            processData: false,
            contentType: false,
            success : function(res){
                // console.log(res);
                // return ;
                if(res.code){
                    // 返回错误代码，提示错误消息
                    if(res.code !== 200){
                        layer.msg(res.msg,{time: 1500});
                        return false;
                    }
                    // else if(res.code === 200){
                    // 返回成功
                    layer.msg(res.msg,{time: 1500},function(){
                        if(actionUrl){
                            parent.location.reload();
                        }
                    });
                    // }
                }
                return false;
            },
            error : function(){
                layer.msg('请求失败，请稍后再试',{time: 1000});
            }
        })
    });
    return false;
}

// 非标单提交方法
function customPost(url)
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
                }
                // 返回成功
                layer.msg(res.msg,{time: 1500},function(){
                    window.location.reload();
                });
            }
        },
        error : function()
        {
            layer.msg('请求失败，请稍后再试',{time: 1000});
        }
    })
}

// 监听回车提交
$(document).keyup(function(event){
    if(event.keyCode === 13){
        for(var i = 0; i < $('input').length; i++){
            if(!$("input:eq("+i+")").val()){
                $("input:eq("+i+")").focus();
                return false;
            }
        }
        $('submit').click();
    }
});

// layer 弹出层
function layerOpend(url, title)
{
    layer.open({
        type: 2,
        title: title,
        area: ['68%', '70%'],
        fix: false, //不固定
        maxmin: true,
        content: url
    });
}


