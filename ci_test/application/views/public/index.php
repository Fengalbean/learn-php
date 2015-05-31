<meta charset="utf-8" />
<link href="<?php echo __BootstrapCss__ ?>" rel="stylesheet" />
<!-- FontAwesome Styles-->
<link href="<?php echo __CSS__ ?>/base/font-awesome.css" rel="stylesheet" />
<!-- Custom Styles-->
<link href="<?php echo __CSS__ ?>/base/base.css" rel="stylesheet" />
<!-- Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


<div id="wrapper">
    <!--    top nav-->
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <i class="fa fa-align-justify fa-2x sidebar-switch fa-switch" data-switch="on" ></i>
            <a class="navbar-brand" href="#"><img src="<?php echo __IMG__ ?>/hadlinkLOGO.png" width="120" height="50"></a>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i>用户信息</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> 设置</a>
                    </li>
<!--                    <li class="divider"></li>-->
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> 退出</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </nav>
    <!--/. top nav  -->

    <!--   sidebar nav-->
    <nav class="navbar-default navbar-side"  role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li class="active-menu">
                    <a href="index.html"><i class="fa fa-home fa-1x"></i> 主页</a>
                </li>
                <li>
                    <a href="ui-elements.html"><i class="fa fa-desktop"></i> 上门保养<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">订单列表</a>
                        </li>
                        <li>
                            <a href="#">排期管理</a>
                        </li>
                        <li>
                            <a href="#">发票管理</a>

                        </li>
                        <li>
                            <a href="#">电话预约</a>

                        </li>
                    </ul>
                </li>
                <li>
                    <a href="chart.html"><i class="fa fa-bar-chart-o"></i> 到店保养<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">订单列表</a>
                        </li>
                        <li>
                            <a href="#">排期管理</a>
                        </li>
                        <li>
                            <a href="#">发票管理</a>

                        </li>
                        <li>
                            <a href="#">电话预约</a>

                        </li>
                    </ul>
                </li>
                <li>
                    <a href="tab-panel.html"><i class="fa fa-qrcode"></i> 车型库管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">订单列表</a>
                        </li>
                        <li>
                            <a href="#">排期管理</a>
                        </li>
                        <li>
                            <a href="#">发票管理</a>

                        </li>
                        <li>
                            <a href="#">电话预约</a>

                        </li>
                    </ul>
                </li>

                <li>
                    <a href="table.html"><i class="fa fa-table"></i> 优惠券管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">订单列表</a>
                        </li>
                        <li>
                            <a href="#">排期管理</a>
                        </li>
                        <li>
                            <a href="#">发票管理</a>

                        </li>
                        <li>
                            <a href="#">电话预约</a>

                        </li>
                    </ul>
                </li>
                <li>
                    <a href="form.html"><i class="fa fa-edit"></i> 运营管理<span class="fa arrow"></span> </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">订单列表</a>
                        </li>
                        <li>
                            <a href="#">排期管理</a>
                        </li>
                        <li>
                            <a href="#">发票管理</a>

                        </li>
                        <li>
                            <a href="#">电话预约</a>

                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Second Level Link</a>
                        </li>
                        <li>
                            <a href="#">Second Level Link</a>
                        </li>
                        <li>
                            <a href="#">Second Level Link<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>

                            </ul>

                        </li>
                    </ul>
                </li>
                <li>
                    <a class="active-menu" href="empty.html"><i class="fa fa-fw fa-file"></i> Empty Page</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. sidebar nav  -->

    <!--    main content-->
    <div id="page-wrapper" style="padding: 0px;">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <center><h3>更新日志</h3></center>
                        </div>
                        <div class="panel-body">
                            <article>
                                <h3>2015-06-01更新日志</h3>
                                <p >1、修复订单详情bug</p>
                                <p >2、密码修改：弹出模态框修改密码</p>
                                <p >3、用户信息：申请时间，操作记录</p>
                                <p >4、问题反馈：有问题请联系freddy（冯德兵-启辰）手机号码：18565807519 </p>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center><h3>欢迎使用海德在线运营端</h3></center>
                        </div>
                        <div class="panel-body">
                            <article>
                                <h3>使用说明</h3>
                                <p >1、账号申请：统一申请，使用本人账号登陆操作</p>
                                <p >2、密码修改：弹出模态框修改密码</p>
                                <p >3、用户信息：申请时间，操作记录</p>
                                <p >4、问题反馈：有问题请联系freddy（冯德兵-启辰）手机号码：18565807519 </p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                                <center><h3>运营管理</h3></center>

                        </div>
                        <div id="search-container" class="panel-body" >

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <center><h3>客服 VS BD中心</h3></center>
                        </div>
                        <div id="search-container" class="panel-body" >

                        </div>
                    </div>
                </div>
            </div>
            <footer style="text-align: center;"><strong>©2015 www.hadlink.com 深圳市海德在线有限公司版权所有</strong></footer>
        </div>
        <!-- /.  main content  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!--    Load custom javascript   -->
<!-- jQuery Js -->
<script src="<?php echo __JQuery__ ?>"></script>
<!-- Bootstrap Js -->
<script src="<?php echo __BootstrapJs__ ?>"></script>
<!-- Metis Menu Js -->
<script src="<?php echo __JS__ ?>/common/sidebar.js"></script>
<!-- Custom Js -->
<script src="<?php echo __JS__ ?>/common/boot.js"></script>
