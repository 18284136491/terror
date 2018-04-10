<?php /*a:4:{s:74:"E:\phpStudy\PHPTutorial\WWW\terror\application\admin\view\index\index.html";i:1523366444;s:76:"E:\phpStudy\PHPTutorial\WWW\terror\application\admin\view\public\header.html";i:1523366729;s:74:"E:\phpStudy\PHPTutorial\WWW\terror\application\admin\view\public\menu.html";i:1523375462;s:76:"E:\phpStudy\PHPTutorial\WWW\terror\application\admin\view\public\footer.html";i:1523366306;}*/ ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>H+ 后台主题UI框架 - 主页</title>

    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico"> <link href="/static/Hplus-v.4.1.0/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/Hplus-v.4.1.0/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/Hplus-v.4.1.0/css/animate.css" rel="stylesheet">
    <link href="/static/Hplus-v.4.1.0/css/style.css?v=4.1.0" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span><img alt="image" class="img-circle" src="/static/Hplus-v.4.1.0/img/profile_small.jpg" /></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold">Beaut-zihan</strong></span>
                                <span class="text-muted text-xs block">超级管理员<b class="caret"></b></span>
                                </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="J_menuItem" href="form_avatar.html">修改头像</a>
                            </li>
                            <li><a class="J_menuItem" href="profile.html">个人资料</a>
                            </li>
                            <li><a class="J_menuItem" href="contacts.html">联系我们</a>
                            </li>
                            <li><a class="J_menuItem" href="mailbox.html">信箱</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html">安全退出</a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">H+
                    </div>
                </li>
                
<?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<li>
    <a href="javascript:;">
        <i class="fa fa-home"></i>
        <span class="nav-label"><?php echo htmlentities($vo['title']); ?></span>
        <span class="fa arrow"></span>
    </a>
    <ul class="nav nav-second-level">
        <?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;$url = $child['url']?>
            <li>
                <a class="J_menuItem" attr-url="<?php echo htmlentities($child['url']); ?>" href="javascript:;" onclick='saveUrl("<?php echo url("$url"); ?>")' data-index="0"><?php echo htmlentities($child['title']); ?></a>
            </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</li>
<?php endforeach; endif; else: echo "" ;endif; ?>

<script>
    function saveUrl(url){
        window.location.href=url;
    }
</script>
            </ul>
        </div>
    </nav>
    <!--左侧导航结束-->
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li class="m-t-xs">
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="/static/Hplus-v.4.1.0/img/a7.jpg">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right">46小时前</small>
                                        <strong>小四</strong> 这个在日本投降书上签字的军官，建国后一定是个不小的干部吧？
                                        <br>
                                        <small class="text-muted">3天前 2014.11.8</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="/static/Hplus-v.4.1.0/img/a4.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right text-navy">25小时前</small>
                                        <strong>国民岳父</strong> 如何看待“男子不满自己爱犬被称为狗，刺伤路人”？——这人比犬还凶
                                        <br>
                                        <small class="text-muted">昨天</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a class="J_menuItem" href="mailbox.html">
                                        <i class="fa fa-envelope"></i> <strong> 查看所有消息</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> 您有16条未读消息
                                        <span class="pull-right text-muted small">4分钟前</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-qq fa-fw"></i> 3条新回复
                                        <span class="pull-right text-muted small">12分钟钱</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a class="J_menuItem" href="notifications.html">
                                        <strong>查看所有 </strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-xs">
                        <a href="index_v1.html" class="J_menuItem" data-index="0"><i class="fa fa-cart-arrow-down"></i> 购买</a>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a class="right-sidebar-toggle" aria-expanded="false">
                            <i class="fa fa-tasks"></i> 主题
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row content-tabs">
            <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
            </button>
            <nav class="page-tabs J_menuTabs">
                <div class="page-tabs-content">
                    <a href="javascript:;" class="active J_menuTab" data-id="index_v1.html">首页</a>
                </div>
            </nav>
            <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
            </button>
            <div class="btn-group roll-nav roll-right">
                <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                </button>
                <ul role="menu" class="dropdown-menu dropdown-menu-right">
                    <li class="J_tabShowActive"><a>定位当前选项卡</a>
                    </li>
                    <li class="divider"></li>
                    <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                    </li>
                    <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                    </li>
                </ul>
            </div>
            <a href="login.html" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
        </div>
        <div class="row J_mainContent" id="content-main">

<body class="gray-bg">
    <div class="row  border-bottom white-bg dashboard-header">
        <div class="col-sm-12">
            <blockquote class="text-warning" style="font-size:14px">您是否需要自己做一款后台、会员中心等等的，但是又缺乏html等前端知识…
                <br>您是否一直在苦苦寻找一款适合自己的后台主题…
                <br>您是否想做一款自己的web应用程序…
                <br>…………
                <h4 class="text-danger">那么，现在H+来了</h4>
            </blockquote>

            <hr>
        </div>
        <div class="col-sm-3">
            <h2>Hello,Guest</h2>
            <small>移动设备访问请扫描以下二维码：</small>
            <br>
            <br>
            <img src="/static/Hplus-v.4.1.0/img/qr_code.png" width="100%" style="max-width:264px;">
            <br>
        </div>
        <div class="col-sm-5">
            <h2>
                H+ 后台主题UI框架
            </h2>
            <p>H+是一个完全响应式，基于Bootstrap3.3.6最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术，她提供了诸多的强大的可以重新组合的UI组件，并集成了最新的jQuery版本(v2.1.4)，当然，也集成了很多功能强大，用途广泛的jQuery插件，她可以用于所有的Web应用程序，如<b>网站管理后台</b>，<b>网站会员中心</b>，<b>CMS</b>，<b>CRM</b>，<b>OA</b>等等，当然，您也可以对她进行深度定制，以做出更强系统。</p>
            <p>
                <b>当前版本：</b>v4.1.0
            </p>
            <p>
                <b>定价：</b><span class="label label-warning">&yen;988（不开发票，不议价）</span>
            </p>
            <br>
            <p>
                <a class="btn btn-success btn-outline" href="http://wpa.qq.com/msgrd?v=3&uin=516477188&site=qq&menu=yes" target="_blank">
                    <i class="fa fa-qq"> </i> 联系我
                </a>
                <a class="btn btn-white btn-bitbucket" href="http://www.zi-han.net" target="_blank">
                    <i class="fa fa-home"></i> 访问博客
                </a>
            </p>
        </div>
        <div class="col-sm-4">
            <h4>H+具有以下特点：</h4>
            <ol>
                <li>完全响应式布局（支持电脑、平板、手机等所有主流设备）</li>
                <li>基于最新版本的Bootstrap 3.3.6</li>
                <li>提供3套不同风格的皮肤</li>
                <li>支持多种布局方式</li>
                <li>使用最流行的的扁平化设计</li>
                <li>提供了诸多的UI组件</li>
                <li>集成多款国内优秀插件，诚意奉献</li>
                <li>提供盒型、全宽、响应式视图模式</li>
                <li>采用HTML5 & CSS3</li>
                <li>拥有良好的代码结构</li>
                <li>更多……</li>
            </ol>
        </div>

    </div>
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-4">

                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>二次开发</h5>
                    </div>
                    <div class="ibox-content">
                        <p>我们提供基于H+的二次开发服务，具体费用请联系作者。</p>
                        <p>同时，我们也提供以下服务：</p>
                        <ol>
                            <li>基于WordPress的网站建设和主题定制</li>
                            <li>PSD转WordPress主题</li>
                            <li>PSD转XHTML</li>
                            <li>Html页面（CSS+XHTML+jQuery）制作</li>
                        </ol>
                    </div>
                </div>
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>联系信息</h5>

                    </div>
                    <div class="ibox-content">
                        <p><i class="fa fa-send-o"></i> 博客：<a href="http://www.zi-han.net" target="_blank">http://www.zi-han.net</a>
                        </p>
                        <p><i class="fa fa-qq"></i> QQ：<a href="http://wpa.qq.com/msgrd?v=3&uin=516477188&site=qq&menu=yes" target="_blank">516477188</a>
                        </p>
                        <p><i class="fa fa-weixin"></i> 微信：<a href="javascript:;">zheng-zihan</a>
                        </p>
                        <p><i class="fa fa-credit-card"></i> 支付宝：<a href="javascript:;" class="支付宝信息">zheng-zihan@qq.com / *子涵</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>更新日志</h5>
                    </div>
                    <div class="ibox-content no-padding">
                        <div class="panel-body">
                            <div class="panel-group" id="version">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#version" href="#v41">v4.1.0</a><code class="pull-right">2015.12.21</code>
                                        </h5>
                                    </div>
                                    <div id="v41" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="alert alert-warning">此版本是一个维护版本，主要是升级和修复bug，让我们共同期待5.0版的到来</div>
                                            <ol>
                                                <li>增加不支持IE8的页面提示</li>
                                                <li>修复页面链接和表单提交默认在新窗口中打开的问题</li>
                                                <li>更新suggest插件，修复错位问题</li>
                                                <li>升级bootstrap版本到3.3.6版本</li>
                                                <li>升级layer到2.1版本</li>
                                                <li>升级echarts到2.2.7版本</li>
                                                <li>升级webuploader到0.1.5版本</li>
                                                <li>修复网络条件不好情况下，页面加载提示遮挡页面无法操作的问题</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#version" href="#v40">v4.1.0</a><code class="pull-right">2015.10.21</code>
                                        </h5>
                                    </div>
                                    <div id="v40" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>升级bootstrap到最新版本3.3.5；</li>
                                                <li>升级jquery版本到最新版本2.1.4；</li>
                                                <li>升级Font Awesome到最新版本4.4.0；</li>
                                                <li>修复了登录页面的一处错误；</li>
                                                <li>修复了主页面出现多个滚动条的问题；</li>
                                                <li>修复了已知的各种浏览器兼容问题；</li>
                                                <li>修复了layphoto和suggest等页面的显示问题；</li>
                                                <li>新增Glyphicons字体图标的预览；</li>
                                                <li>新增对不支持的浏览器的友好提示；</li>
                                                <li>新增视频/音乐播放器的支持；</li>
                                                <li>新增Bootstrap Table(推荐)；</li>
                                                <li>进一步完善了开发文档；</li>
                                                <li>提供了离线支持，开箱即用；</li>
                                                <li>对IE系列的浏览器支持更好。</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#version" href="#v32">v3.2.0</a><code class="pull-right">2015.09.22</code>
                                        </h5>
                                    </div>
                                    <div id="v32" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>修复360浏览器个别情况下崩溃的问题；</li>
                                                <li>优化360浏览器的显示效果；</li>
                                                <li>修复layim弹出聊天窗口出错的问题；</li>
                                                <li>优化登录、注册、锁屏页面，使其在右侧主体区域打开时转到新页面打开；</li>
                                                <li>优化了移动设备的展示效果。</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#version" href="#v31">v3.1.0</a><code class="pull-right">2015.09.18</code>
                                        </h5>
                                    </div>
                                    <div id="v31" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>修复登录页面文本框输入字符不可见的问题；</li>
                                                <li>修复火狐下conTabs关闭操作按钮不下拉的问题；</li>
                                                <li>修复IOS系统下各种浏览器右侧内容不滚动的问题；</li>
                                                <li>优化了主页示例三的显示；</li>
                                                <li>修复了jqgrid编辑弹框导致页面错位的问题；</li>
                                                <li>使百度Echarts图标支持响应式，并优化了其显示；</li>
                                                <li>修复Summernote文本编辑器下拉菜单显示不全的问题；</li>
                                                <li>修复Toastr通知图标显示多个的问题。</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#version" href="#v301">v3.0.x</a><code class="pull-right">2015.09.04</code>
                                        </h5>
                                    </div>
                                    <div id="v301" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>自H+ v3.0版发布后，又陆续发布了7个小版本，修复了一些兼容性问题，但是没有对外发布，更新日志略过……</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#version" href="#v30">v3.0.0</a><code class="pull-right">2015.09.03</code>
                                        </h5>
                                    </div>
                                    <div id="v30" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>今天是情人节，H+终于跨到了v3.0，就是是情人节礼物吧，感谢你们的不离不弃，一路相伴！ <a href="#" class="viewlog"><i class="fa fa-eye"></i> 查看升级日志</a>
                                                </li>
                                                <li><span class="text-danger">注意：</span>本次更新调整较大，不建议直接覆盖升级！</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#version" href="#v22">v2.2.0</a><code class="pull-right">2015.05.12</code>
                                        </h5>
                                    </div>
                                    <div id="v22" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>根据用户的反馈，根据用户的反馈，移除了CDN支持，CDN服务将于2015年6月30日之后结束支持，如果您正在使用CDN服务，请尽快完成迁移，对于给您造成的不便，我们表示非常抱歉；
                                                </li>
                                                <li>升级Bootstrap到最新版本v3.3.4；
                                                </li>
                                                <li>修改了style.css，修复了其中的一些bug；
                                                </li>

                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#version" href="#v21">v2.1.0</a><code class="pull-right">2015.03.19</code>
                                        </h5>
                                    </div>
                                    <div id="v21" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>增加cdn服务支持，cdn节点使用阿里云服务，可保证您的项目随时使用最新版本的H+，免去反复升级的麻烦；
                                                </li>
                                                <li>修复一些问题；</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#version" href="#v20">v2.0.0</a><code class="pull-right">2015.03.02</code>
                                        </h5>
                                    </div>
                                    <div id="v20" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>增加RTL布局及RTL支持，可点击右上角齿轮按钮选择RTL模式查看；
                                                </li>
                                                <li>增加上下布局； <a href="index_4.html" title="去看看"><i class="fa fa-eye"></i></a>
                                                </li>
                                                <li>在360浏览器6.0以上版本中强制以webkit内核解析，体验更佳；
                                                </li>
                                                <li>增加<a href="toastr_notifications.html">Toastr通知</a>、<a href="nestable_list.html">嵌套列表</a>、<a href="timeline_v2.html">时间轴</a>、<a href="forum_main.html">论坛</a>、<a href="code_editor.html">代码编辑器</a>、<a href="modal_window.html">模态窗口</a>、<a href="validation.html">表单验证</a>、<a href="tree_view_v2.html">树形视图</a>、<a href="chat_view.html">聊天窗口</a>等页面；
                                                </li>
                                                <li>升级<a href="icons.html">Font Awesome</a>，<a href="form_simditor.html">Simditor</a>等到最新版本；
                                                </li>
                                                <li>优化部分内容
                                                </li>

                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#version" href="#v18">v1.8.0</a><code class="pull-right">2015.02.23</code>
                                        </h5>
                                    </div>
                                    <div id="v18" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>修复一些错误；
                                                </li>
                                                <li>修复了WebUploader中的一些问题； <a href="form_webuploader.html" title="去看看"><i class="fa fa-eye"></i></a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#version" href="#v17">v1.7.0</a><code class="pull-right">2015.02.11</code>
                                        </h5>
                                    </div>
                                    <div id="v17" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>更新jquery版本到官方最新版v2.1.1；
                                                </li>
                                                <li>更新Bootstrap版本到官方最新版v3.3.0；
                                                </li>
                                                <li>增加jqGrid组件； <a href="table_jqgrid.html" title="去看看"><i class="fa fa-eye"></i></a>
                                                </li>
                                                <li>修复Summernote编辑器中的一个严重错误； <a href="form_editors.html" title="去看看"><i class="fa fa-eye"></i></a>
                                                </li>
                                                <li>修改了一些已知的bug，并修复了演示示例中的一些错误；
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#version" href="#v16">v1.6.0</a><code class="pull-right">2014.01.26</code>
                                        </h5>
                                    </div>
                                    <div id="v16" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>优化资源文件路径，删除多余文件
                                                </li>
                                                <li>增加Markdown编辑器 <a href="form_markdown.html" title="去看看"><i class="fa fa-eye"></i></a>
                                                </li>
                                                <li>增加拾色器ColorPicker <a href="form_advanced.html" title="去看看"><i class="fa fa-eye"></i></a>
                                                </li>
                                                <li>优化部分页面代码
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#version" href="#v15">v1.5.0</a><code class="pull-right">2014.01.17</code>
                                        </h4>
                                    </div>
                                    <div id="v15" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>增加了Bootstrap3表单构建器，表单设计更轻松； <a href="form_builder.html" title="去看看"><i class="fa fa-eye"></i></a>
                                                </li>
                                                <li>修改了webim的高度；
                                                </li>
                                                <li>修复了因缺少jquery.min.map文件而导致页面加载进度条速度过慢的问题；
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#version" href="#v14">v1.4.0</a><code class="pull-right">2015.01.05</code>
                                        </h4>
                                    </div>
                                    <div id="v14" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>修复了百度ECharts图表显示不正确的问题； <a href="graph_echarts.html" title="去看看"><i class="fa fa-eye"></i></a>
                                                </li>
                                                <li>新增表单验证示例，使用jQuery Validate插件实现； <a href="form_validate.html" title="去看看"><i class="fa fa-eye"></i></a>
                                                </li>
                                                <li>新增树形视图示例； <a href="tree_view.html" title="去看看"><i class="fa fa-eye"></i></a>
                                                </li>
                                                <li>修复弹框遮罩的Bug；
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#version" href="#v13">v1.3.0</a><code class="pull-right">2014.12.21</code>
                                        </h4>
                                    </div>
                                    <div id="v13" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>加入阿里巴巴团队的字体图标库，字体图标可以自定义啦； <a href="iconfont.html" title="去看看"><i class="fa fa-eye"></i></a>
                                                </li>
                                                <li>新增头像裁剪上传组件FullAvatareditor； <a href="form_avatar.html" title="去看看"><i class="fa fa-eye"></i></a>
                                                </li>
                                                <li>集成网页弹层插件layer； <a href="layer.html" title="去看看"><i class="fa fa-eye"></i></a>
                                                </li>
                                                <li>集成日期选择器layerDate； <a href="layerdate.html" title="去看看"><i class="fa fa-eye"></i></a>
                                                </li>
                                                <li class="text-danger"><b>增加web即时通讯功能，可以在系统内在线聊天了；</b> <a href="webim.html" title="去看看"><i class="fa fa-eye"></i></a>
                                                </li>
                                                <li>增加主题预览功能，点击右上侧齿轮图标预览；</li>
                                                <li>增加左侧边栏固定功能；</li>
                                                <li>修复了多处问题。</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#version" href="#v12">v1.2.0</a><code class="pull-right">2014.12.05</code>
                                        </h4>
                                    </div>
                                    <div id="v12" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>新增百度WebUploader拖动上传文件组件；<a href="form_webuploader.html" title="去看看"><i class="fa fa-eye"></i></a>
                                                </li>
                                                <li>新增国产优秀富文本编辑器插件Simditor；<a href="form_simditor.html" title="去看看"><i class="fa fa-eye"></i></a>
                                                </li>
                                                <li>新增百度ECharts统计图表插件；<a href="form_simditor.html" title="去看看"><i class="fa fa-eye"></i></a>
                                                </li>
                                                <li>修复了几处问题。</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#version" href="#v11">v1.1.0</a><code class="pull-right">2014.11.18</code>
                                        </h4>
                                    </div>
                                    <div id="v11" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>修复了几处问题。</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#version" href="#v11">v1.0.0</a><code class="pull-right">2014.11.10</code>
                                        </h4>
                                    </div>
                                    <div id="v11" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>Hplus正式发布。</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>购买说明</h5>
                    </div>
                    <div class="ibox-content">
                        <p>购买后我可以获得什么？</p>
                        <ol>
                            <li>所有源码(未压缩、带注释版本)；</li>
                            <li>说明文档；</li>
                            <li>终身免费升级服务；</li>
                            <li>必要的技术支持；</li>
                            <li>付费二次开发服务；</li>
                            <li>授权许可；</li>
                            <li>……</li>
                        </ol>
                        <hr>
                        <p>如果需要购买H+主题，可直接付款到支付宝：<a href="javascript;">zheng-zihan@qq.com</a>，收款人：<a href="javascript;">*子涵</a>。也可以使用手机支付宝或者微信扫码支付：</p>
                        <div class="alert alert-warning">
                            付款完成后请及时联系作者，或在付款备注中留下邮箱或QQ，方便作者及时联系您。
                            <br>如果图片太小，可以点击图片放大。
                        </div>
                        <p id="pay-qrcode">
                            <a href="javascript:;"><img src="/static/Hplus-v.4.1.0/img/pay.png" width="100%" alt="请使用手机支付宝或者微信扫码支付">
                            </a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script id="welcome-template" type="text/x-handlebars-template">
        <div class="border-bottom white-bg page-heading clearfix">
            <h2>更新日志：</h2>
            <div>今天是情人节，H+终于跨到了v3.0，就算是情人节礼物吧，感谢你们的不离不弃，一路相伴！</div>
            <div class="pull-right">——Beau-zihan / 2015.8.20</div>
        </div>
        <div class="m">
            <div class="tabs-container">
                <div class="tabs-left">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#layouts"><i class="fa fa-columns"></i> 布局
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#new"><i class="fa fa-plus-square"></i> 新增
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#update"><i class="fa fa-arrow-circle-o-up"></i> 升级
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#revise"><i class="fa fa-pencil"></i> 修正
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#optimize"><i class="fa fa-magic"></i> 优化
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" style="line-height:1.8em;">
                        <div id="layouts" class="tab-pane active">
                            <div class="panel-body">
                                <ol class="no-left-padding">
                                    <li class="text-danger"><b>推荐：</b>期待已久的contentTabs效果，支持关闭、双击刷新、左右滑动等；</li>
                                    <li>固定左侧主菜单栏，并对菜单项做了新的调整；</li>
                                    <li>增加右侧面板及聊天窗口等。</li>
                                </ol>

                                <p style="margin-left:25px;">
                                <hr><span class="label label-danger">特别致谢</span> 感谢[子·梦]同学提供的contentTabs优化方案和代码！</p>
                            </div>
                        </div>
                        <div id="new" class="tab-pane">
                            <div class="panel-body">
                                <ol class="no-left-padding">
                                    <li>表单：搜索自动补全插件suggest、高级表单插件（时间选择，切换按钮，图像裁剪上传，单选复选框美化，文件域美化等)等；</li>
                                    <li>图表：图表组合页面等；</li>
                                    <li>页面：团队、社交、客户管理、文章列表、文章详情、新登录页面等；</li>
                                    <li>UI元素：竖向选项卡、拖动面板、文本对比、加载动画、SweetAlert等；</li>
                                    <li>相册：layer相册、Blueimp相册等；</li>
                                    <li>表格：FooTables等。</li>
                                </ol>
                            </div>
                        </div>
                        <div id="update" class="tab-pane">
                            <div class="panel-body">
                                <ol>
                                    <li>页面弹层插件layer升级至1.9.3；</li>
                                    <li>更新jqgrid，支持树形表格；</li>
                                    <li>更新帮助文档。</li>
                                </ol>
                            </div>
                        </div>
                        <div id="revise" class="tab-pane">
                            <div class="panel-body">
                                <ol>
                                    <li>jstree、Simditor等多处错误；</li>
                                    <li>页面加载进度提示；</li>
                                    <li>Glyphicon字体图标不显示的问题；</li>
                                    <li>重新整理开发文档；</li>
                                </ol>
                            </div>
                        </div>
                        <div id="optimize" class="tab-pane">
                            <div class="panel-body">
                                <ol>
                                    <li>H+整体视觉效果；</li>
                                    <li>jstree默认主题显示效果；</li>
                                    <li>表单验证显示效果；</li>
                                    <li>iCheck显示效果；</li>
                                    <li>Tabs显示效果。</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alert alert-warning alert-dismissable m-t-sm">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                同时这也是一个示例，演示了如何从iframe中弹出一个覆盖父页面的层。
            </div>
        </div>
    </script>

    <!-- 全局js -->
    <script src="/static/Hplus-v.4.1.0/js/jquery.min.js?v=2.1.4"></script>
    <script src="/static/Hplus-v.4.1.0/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/static/Hplus-v.4.1.0/js/plugins/layer/layer.min.js"></script>

    <!-- 自定义js -->
    <script src="/static/Hplus-v.4.1.0/js/content.js"></script>

    <!-- 欢迎信息 -->
    <script src="/static/Hplus-v.4.1.0/js/welcome.js"></script>
</body>
</div>
<div class="footer">
    <div class="pull-right">&copy; 2014-2015 <a href="http://www.zi-han.net/" target="_blank">zihan's blog</a>
    </div>
</div>
</div>
<!--右侧部分结束-->
<!--右侧边栏开始-->
<div id="right-sidebar">
    <div class="sidebar-container">

        <ul class="nav nav-tabs navs-3">

            <li class="active">
                <a data-toggle="tab" href="#tab-1">
                    <i class="fa fa-gear"></i> 主题
                </a>
            </li>
            <li class=""><a data-toggle="tab" href="#tab-2">
                通知
            </a>
            </li>
            <li><a data-toggle="tab" href="#tab-3">
                项目进度
            </a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="tab-1" class="tab-pane active">
                <div class="sidebar-title">
                    <h3> <i class="fa fa-comments-o"></i> 主题设置</h3>
                    <small><i class="fa fa-tim"></i> 你可以从这里选择和预览主题的布局和样式，这些设置会被保存在本地，下次打开的时候会直接应用这些设置。</small>
                </div>
                <div class="skin-setttings">
                    <div class="title">主题设置</div>
                    <div class="setings-item">
                        <span>收起左侧菜单</span>
                        <div class="switch">
                            <div class="onoffswitch">
                                <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu">
                                <label class="onoffswitch-label" for="collapsemenu">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="setings-item">
                        <span>固定顶部</span>

                        <div class="switch">
                            <div class="onoffswitch">
                                <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox" id="fixednavbar">
                                <label class="onoffswitch-label" for="fixednavbar">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="setings-item">
                                <span>
                        固定宽度
                    </span>

                        <div class="switch">
                            <div class="onoffswitch">
                                <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox" id="boxedlayout">
                                <label class="onoffswitch-label" for="boxedlayout">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="title">皮肤选择</div>
                    <div class="setings-item default-skin nb">
                                <span class="skin-name ">
                         <a href="#" class="s-skin-0">
                             默认皮肤
                         </a>
                    </span>
                    </div>
                    <div class="setings-item blue-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-1">
                            蓝色主题
                        </a>
                    </span>
                    </div>
                    <div class="setings-item yellow-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-3">
                            黄色/紫色主题
                        </a>
                    </span>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-pane">

                <div class="sidebar-title">
                    <h3> <i class="fa fa-comments-o"></i> 最新通知</h3>
                    <small><i class="fa fa-tim"></i> 您当前有10条未读信息</small>
                </div>

                <div>

                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="/static/Hplus-v.4.1.0/img/a1.jpg">

                                <div class="m-t-xs">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                            </div>
                            <div class="media-body">

                                据天津日报报道：瑞海公司董事长于学伟，副董事长董社轩等10人在13日上午已被控制。
                                <br>
                                <small class="text-muted">今天 4:21</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="/static/Hplus-v.4.1.0/img/a2.jpg">
                            </div>
                            <div class="media-body">
                                HCY48之音乐大魔王会员专属皮肤已上线，快来一键换装拥有他，宣告你对华晨宇的爱吧！
                                <br>
                                <small class="text-muted">昨天 2:45</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="/static/Hplus-v.4.1.0/img/a3.jpg">

                                <div class="m-t-xs">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                写的好！与您分享
                                <br>
                                <small class="text-muted">昨天 1:10</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="/static/Hplus-v.4.1.0/img/a4.jpg">
                            </div>

                            <div class="media-body">
                                国外极限小子的炼成！这还是亲生的吗！！
                                <br>
                                <small class="text-muted">昨天 8:37</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="/static/Hplus-v.4.1.0/img/a8.jpg">
                            </div>
                            <div class="media-body">

                                一只流浪狗被收留后，为了减轻主人的负担，坚持自己觅食，甚至......有些东西，可能她比我们更懂。
                                <br>
                                <small class="text-muted">今天 4:21</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="/static/Hplus-v.4.1.0/img/a7.jpg">
                            </div>
                            <div class="media-body">
                                这哥们的新视频又来了，创意杠杠滴，帅炸了！
                                <br>
                                <small class="text-muted">昨天 2:45</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="/static/Hplus-v.4.1.0/img/a3.jpg">

                                <div class="m-t-xs">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                最近在补追此剧，特别喜欢这段表白。
                                <br>
                                <small class="text-muted">昨天 1:10</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="/static/Hplus-v.4.1.0/img/a4.jpg">
                            </div>
                            <div class="media-body">
                                我发起了一个投票 【你认为下午大盘会翻红吗？】
                                <br>
                                <small class="text-muted">星期一 8:37</small>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <div id="tab-3" class="tab-pane">

                <div class="sidebar-title">
                    <h3> <i class="fa fa-cube"></i> 最新任务</h3>
                    <small><i class="fa fa-tim"></i> 您当前有14个任务，10个已完成</small>
                </div>

                <ul class="sidebar-list">
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9小时以后</div>
                            <h4>市场调研</h4> 按要求接收教材；

                            <div class="small">已完成： 22%</div>
                            <div class="progress progress-mini">
                                <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                            </div>
                            <div class="small text-muted m-t-xs">项目截止： 4:00 - 2015.10.01</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9小时以后</div>
                            <h4>可行性报告研究报上级批准 </h4> 编写目的编写本项目进度报告的目的在于更好的控制软件开发的时间,对团队成员的 开发进度作出一个合理的比对

                            <div class="small">已完成： 48%</div>
                            <div class="progress progress-mini">
                                <div style="width: 48%;" class="progress-bar"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9小时以后</div>
                            <h4>立项阶段</h4> 东风商用车公司 采购综合综合查询分析系统项目进度阶段性报告武汉斯迪克科技有限公司

                            <div class="small">已完成： 14%</div>
                            <div class="progress progress-mini">
                                <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-primary pull-right">NEW</span>
                            <h4>设计阶段</h4>
                            <!--<div class="small pull-right m-t-xs">9小时以后</div>-->
                            项目进度报告(Project Progress Report)
                            <div class="small">已完成： 22%</div>
                            <div class="small text-muted m-t-xs">项目截止： 4:00 - 2015.10.01</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9小时以后</div>
                            <h4>拆迁阶段</h4> 科研项目研究进展报告 项目编号: 项目名称: 项目负责人:

                            <div class="small">已完成： 22%</div>
                            <div class="progress progress-mini">
                                <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                            </div>
                            <div class="small text-muted m-t-xs">项目截止： 4:00 - 2015.10.01</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9小时以后</div>
                            <h4>建设阶段 </h4> 编写目的编写本项目进度报告的目的在于更好的控制软件开发的时间,对团队成员的 开发进度作出一个合理的比对

                            <div class="small">已完成： 48%</div>
                            <div class="progress progress-mini">
                                <div style="width: 48%;" class="progress-bar"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9小时以后</div>
                            <h4>获证开盘</h4> 编写目的编写本项目进度报告的目的在于更好的控制软件开发的时间,对团队成员的 开发进度作出一个合理的比对

                            <div class="small">已完成： 14%</div>
                            <div class="progress progress-mini">
                                <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                            </div>
                        </a>
                    </li>

                </ul>

            </div>
        </div>

    </div>
</div>
<!--右侧边栏结束-->
<!--mini聊天窗口开始-->
<div class="small-chat-box fadeInRight animated">

    <div class="heading" draggable="true">
        <small class="chat-date pull-right">
            2015.9.1
        </small> 与 Beau-zihan 聊天中
    </div>

    <div class="content">

        <div class="left">
            <div class="author-name">
                Beau-zihan <small class="chat-date">
                10:02
            </small>
            </div>
            <div class="chat-message active">
                你好
            </div>

        </div>
        <div class="right">
            <div class="author-name">
                游客
                <small class="chat-date">
                    11:24
                </small>
            </div>
            <div class="chat-message">
                你好，请问H+有帮助文档吗？
            </div>
        </div>
        <div class="left">
            <div class="author-name">
                Beau-zihan
                <small class="chat-date">
                    08:45
                </small>
            </div>
            <div class="chat-message active">
                有，购买的H+源码包中有帮助文档，位于docs文件夹下
            </div>
        </div>
        <div class="right">
            <div class="author-name">
                游客
                <small class="chat-date">
                    11:24
                </small>
            </div>
            <div class="chat-message">
                那除了帮助文档还提供什么样的服务？
            </div>
        </div>
        <div class="left">
            <div class="author-name">
                Beau-zihan
                <small class="chat-date">
                    08:45
                </small>
            </div>
            <div class="chat-message active">
                1.所有源码(未压缩、带注释版本)；
                <br> 2.说明文档；
                <br> 3.终身免费升级服务；
                <br> 4.必要的技术支持；
                <br> 5.付费二次开发服务；
                <br> 6.授权许可；
                <br> ……
                <br>
            </div>
        </div>


    </div>
    <div class="form-chat">
        <div class="input-group input-group-sm">
            <input type="text" class="form-control"> <span class="input-group-btn"> <button
                class="btn btn-primary" type="button">发送
                </button> </span>
        </div>
    </div>

</div>
<div id="small-chat">
    <span class="badge badge-warning pull-right">5</span>
    <a class="open-small-chat">
        <i class="fa fa-comments"></i>

    </a>
</div>
<!--mini聊天窗口结束-->
</div>

<!-- 全局js -->
<script src="/static/Hplus-v.4.1.0/js/jquery.min.js?v=2.1.4"></script>
<script src="/static/Hplus-v.4.1.0/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/static/Hplus-v.4.1.0/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/static/Hplus-v.4.1.0/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/static/Hplus-v.4.1.0/js/plugins/layer/layer.min.js"></script>

<!-- 自定义js -->
<script src="/static/Hplus-v.4.1.0/js/hplus.js?v=4.1.0"></script>
<script type="text/javascript" src="/static/Hplus-v.4.1.0/js/contabs.js"></script>

<!-- 第三方插件 -->
<script src="/static/Hplus-v.4.1.0/js/plugins/pace/pace.min.js"></script>

</body>

</html>


