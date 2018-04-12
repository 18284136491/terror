<?php /*a:1:{s:73:"E:\phpStudy\PHPTutorial\WWW\terror\application\admin\view\node\index.html";i:1523548952;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 嵌套列表</title>

    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/static/Hplus-v.4.1.0/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/Hplus-v.4.1.0/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/static/Hplus-v.4.1.0/css/animate.css" rel="stylesheet">
    <link href="/static/Hplus-v.4.1.0/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            <div class="col-sm-4">
                <div id="nestable-menu">
                    <button type="button" data-action="expand-all" class="btn btn-white btn-sm">展开所有</button>
                    <button type="button" data-action="collapse-all" class="btn btn-white btn-sm">收起所有</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>节点列表</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="dd" id="nestable">
                            <ol class="dd-list">

                                <?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <li class="dd-item" data-id="2">
                                    <div class="dd-handle"><?php echo htmlentities($vo['title']); ?></div>
                                    <ol class="dd-list">

                                        <?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle"><?php echo htmlentities($child['title']); ?> ---- <?php echo htmlentities($child['url']); ?></div>
                                            <ol class="dd-list">

                                                <?php if(is_array($child['child']) || $child['child'] instanceof \think\Collection || $child['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $child['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?>
                                                <li class="dd-item" data-id="3">
                                                    <div class="dd-handle"><?php echo htmlentities($child['title']); ?> ---- <?php echo htmlentities($child['url']); ?></div>
                                                </li>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>

                                            </ol>
                                        </li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>

                                    </ol>
                                </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="display: none">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>自定义主题</h5>
                    </div>
                    <div class="ibox-content">

                        <p class="m-b-lg">
                            每个列表可以自定义标准的CSS样式。每个单元响应所以你可以给它添加其他元素来改善功能列表。
                        </p>

                        <div class="dd" id="nestable2">
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        <span class="label label-info"><i class="fa fa-users"></i></span> 群组
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <span class="pull-right"> 12:00 </span>
                                                <span class="label label-info"><i class="fa fa-cog"></i></span> 设置
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <span class="pull-right"> 11:00 </span>
                                                <span class="label label-info"><i class="fa fa-bolt"></i></span> 筛选
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="4">
                                            <div class="dd-handle">
                                                <span class="pull-right"> 11:00 </span>
                                                <span class="label label-info"><i class="fa fa-laptop"></i></span> 电脑
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                                <li class="dd-item" data-id="5">
                                    <div class="dd-handle">
                                        <span class="label label-warning"><i class="fa fa-users"></i></span> 用户
                                    </div>
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="6">
                                            <div class="dd-handle">
                                                <span class="pull-right"> 15:00 </span>
                                                <span class="label label-warning"><i class="fa fa-users"></i></span> 列用户表
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="7">
                                            <div class="dd-handle">
                                                <span class="pull-right"> 16:00 </span>
                                                <span class="label label-warning"><i class="fa fa-bomb"></i></span> 炸弹
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="8">
                                            <div class="dd-handle">
                                                <span class="pull-right"> 21:00 </span>
                                                <span class="label label-warning"><i class="fa fa-child"></i></span> 子元素
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 全局js -->
    <script src="/static/Hplus-v.4.1.0/js/jquery.min.js?v=2.1.4"></script>
    <script src="/static/Hplus-v.4.1.0/js/bootstrap.min.js?v=3.3.6"></script>



    <!-- 自定义js -->
    <script src="/static/Hplus-v.4.1.0/js/content.js?v=1.0.0"></script>


    <!-- Nestable List -->
    <script src="/static/Hplus-v.4.1.0/js/plugins/nestable/jquery.nestable.js"></script>
    <script>
        $(document).ready(function () {

            var updateOutput = function (e) {
                var list = e.length ? e : $(e.target),
                    output = list.data('output');
                if (window.JSON) {
                    output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
                } else {
                    output.val('浏览器不支持');
                }
            };
            // activate Nestable for list 1
            $('#nestable').nestable({
                group: 1
            }).on('change', updateOutput);

            // activate Nestable for list 2
            $('#nestable2').nestable({
                group: 1
            }).on('change', updateOutput);

            // output initial serialised data
            updateOutput($('#nestable').data('output', $('#nestable-output')));
            updateOutput($('#nestable2').data('output', $('#nestable2-output')));

            $('#nestable-menu').on('click', function (e) {
                var target = $(e.target),
                    action = target.data('action');
                if (action === 'expand-all') {
                    $('.dd').nestable('expandAll');
                }
                if (action === 'collapse-all') {
                    $('.dd').nestable('collapseAll');
                }
            });
        });
    </script>

</body>

</html>
