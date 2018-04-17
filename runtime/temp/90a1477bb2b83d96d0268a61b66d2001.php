<?php /*a:1:{s:74:"E:\phpStudy\PHPTutorial\WWW\terror\application\admin\view\order\index.html";i:1523725999;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 数据表格</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/static/Hplus-v.4.1.0/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/Hplus-v.4.1.0/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <!-- Data Tables -->
    <link href="/static/Hplus-v.4.1.0/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="/static/Hplus-v.4.1.0/css/animate.css" rel="stylesheet">
    <link href="/static/Hplus-v.4.1.0/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>订单列表 <small>分类，查找</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>

                    <div class="ibox-content">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-sm-2 m-b-xs">
                                    <select name="status" class=" form-control input-s-sm inline">
                                        <option value="0" <?php if(app('request')->post('status') == '0'): ?>selected<?php endif; ?>>请选择</option>
                                        <option value="1" <?php if(app('request')->post('status') == '1'): ?>selected<?php endif; ?>>未使用</option>
                                        <option value="2" <?php if(app('request')->post('status') == '2'): ?>selected<?php endif; ?>>使用中</option>
                                        <option value="3" <?php if(app('request')->post('status') == '3'): ?>selected<?php endif; ?>>已使用</option>
                                    </select>
                                </div>
                                <div data-toggle="buttons" class="btn-group m-b-xs">
                                    <input type="text" id="start" value="<?php echo htmlentities(app('request')->post('start')); ?>" name="start" placeholder="开始时间" class="input form-control">
                                </div>
                                <div data-toggle="buttons" class="btn-group m-b-xs">
                                    <input type="text" id="end" value="<?php echo htmlentities(app('request')->post('end')); ?>" name="end" placeholder="结束时间" class="input form-control">
                                </div>
                                <div class="col-sm-3 pull-right">
                                    <div class="input-group">
                                        <input type="text" value="<?php echo htmlentities(app('request')->post('token')); ?>" name="token" placeholder="请输入关键词" class="input form-control">
                                        <span class="input-group-btn"><input  type="submit" class="btn btn-primary post-ajax"> 搜索</input > </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="ibox-content">

                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>订单号</th>
                                    <th>订单token</th>
                                    <th>订单创建时间</th>
                                    <th>token结束时间</th>
                                    <th>订单状态</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <tr class="gradeX">
                                        <td><?php echo htmlentities($vo['id']); ?></td>
                                        <td><?php echo htmlentities($vo['order_num']); ?></td>
                                        <td><?php echo htmlentities($vo['token']); ?></td>
                                        <td><?php echo htmlentities($vo['time']); ?></td>
                                        <td><?php echo htmlentities($vo['end_time']); ?></td>
                                        <td><?php echo htmlentities($vo['status']); ?></td>
                                    </tr>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>id</th>
                                    <th>订单号</th>
                                    <th>订单token</th>
                                    <th>订单创建时间</th>
                                    <th>token结束时间</th>
                                    <th>订单状态</th>
                                </tr>
                            </tfoot>
                        </table>

                        <div class="text-right"><?php echo $list; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 全局js -->
    <script src="/static/Hplus-v.4.1.0/js/jquery.min.js?v=2.1.4"></script>
    <script src="/static/Hplus-v.4.1.0/js/bootstrap.min.js?v=3.3.6"></script>



    <script src="/static/Hplus-v.4.1.0/js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="/static/Hplus-v.4.1.0/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="/static/Hplus-v.4.1.0/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- 自定义js -->
    <script src="/static/Hplus-v.4.1.0/js/content.js?v=1.0.0"></script>
    <script type="text/javascript" src="/static/layer/layer.js"></script>
    <script type="text/javascript" src="/static/layer/laydate.js"></script>
    <script type="text/javascript" src="/static/postAjax.js"></script>


    <!-- Page-Level Scripts -->
    <script>
        // 时间插件-开始
        laydate.render({
            elem: '#start'
        });
        // 时间插件-结束
        laydate.render({
            elem: '#end'
        });

    </script>

</body>

</html>
