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
        <div class="navbar-header" style="width: 20%">
            <i class="fa fa-align-justify fa-2x sidebar-switch fa-switch" data-switch="off" ></i>
            <a class="navbar-brand" href="<?php echo generate_url('welcome','index');    ?>"><img src="<?php echo __IMG__ ?>/hadlinkLOGO.png" width="120" height="50"></a>
        </div>
        <div style="width: 80%;">
<!--            <ul class="nav navbar-nav" style="padding-top: 10px;">-->
<!--                <li class="dropdown">-->
<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">上门保养 <span class="caret"></span></a>-->
<!--                    <ul class="dropdown-menu" role="menu" style="margin-left: -50px;">-->
<!--                        <li><a href="#">Action</a></li>-->
<!--                        <li><a href="#">Another action</a></li>-->
<!--                        <li><a href="#">Something else here</a></li>-->
<!--                        <li class="divider"></li>-->
<!--                        <li><a href="#">Separated link</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <ul class="nav navbar-nav" style="padding-top: 10px;">-->
<!--                <li class="dropdown">-->
<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">到店保养 <span class="caret"></span></a>-->
<!--                    <ul class="dropdown-menu" role="menu" style="margin-left: -50px;">-->
<!--                        <li><a href="#">Action</a></li>-->
<!--                        <li><a href="#">Another action</a></li>-->
<!--                        <li><a href="#">Something else here</a></li>-->
<!--                        <li class="divider"></li>-->
<!--                        <li><a href="#">Separated link</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->

        </div>
        <ul class="nav navbar-top-links navbar-right" style="padding-top: 10px;">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>

    </nav>
    <!--/. top nav  -->
    <!--   sidebar nav-->
    <nav class="navbar-default navbar-side"  role="navigation" style="display: none;">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
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

            </ul>

        </div>

    </nav>
    <!-- /. sidebar nav  -->

    <!--    main content-->
    <div id="page-wrapper" style="padding: 0px;margin: 0;">
        <div id="page-inner">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        预约订单-查询条件
                    </h3>
                </div>
                <div id="search-container" class="panel-body" >
                    <form class="form-horizontal search" role="form" id="search">
                        <div class="col-sm-4">
                            <label class=" control-label col-sm-4">订单号:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="orderNum">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class=" control-label col-sm-4">手机号:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="mobileNum">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class=" control-label col-sm-4">车牌号:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="carNum">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class=" control-label col-sm-4">服务团队:</label>
                            <div class="col-sm-8">
                                <select id="selectGroup" class="form-control ">
                                    <option value = "-2">请选择</option>
                                    <!--<option value = 1>A</option>-->
                                    <!--<option value = 2>B</option>-->
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-sm-5 control-label">下单时间（开始）:</label>
                            <div class="col-sm-7">
                                <input type="text" id="createTimeBegin" class="form-control" value="" style="height: 34px;width: 100%;" >
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-sm-5 control-label">下单时间（结束）:</label>
                            <div class="col-sm-7">
                                <input type="text" id="createTimeEnd" class="form-control" value="" style="height: 34px;width: 100%;" >
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class=" control-label col-sm-4">订单状态:</label>
                            <div class="col-sm-8">
                                <select id="selectStutas" class="form-control ">
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-sm-5 control-label">排期时间（开始）:</label>
                            <div class="col-sm-7">
                                <input type="text" id="maintenanceBeginTime" class="form-control" value="" style="height: 34px;width: 100%;" >
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-sm-5 control-label">排期时间（结束）:</label>
                            <div class="col-sm-7">
                                <input type="text" id="maintenanceEndTime" class="form-control" value="" style="height: 34px;width: 100%;" >
                            </div>
                        </div>

                        <div class="col-md-8" style="padding: 20px 0 0 240px;">
                            <button type="button" id="searchButton" class="btn btn-success" >查询</button>
                            <button type="button" id="refreshButton" class="btn btn-default " >刷新</button>
                            <button type="button" class="btn btn-info" id="export">导出Excel</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="table-data">
                <table class="table table-striped table-hover table-bordered" id="bookListTable">
                    <thead>
                    <tr>
                        <th>编号</th>
                        <th>订单号</th>
                        <th>下单时间</th>
                        <th >保养时间</th>
                        <th>姓名</th>
                        <th>手机号</th>
                        <th>地址</th>
                        <th>车型</th>
                        <th>车牌号</th>
                        <th>团队代号</th>
                        <th class="">联系状态</th>
                        <th class="w55">状态</th>
                        <th class="w55">体检报告</th>
                        <th class="w130">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>od0001</td>
                        <td>2015年1月5日</td>
                        <td>2015年1月5日</td>
                        <td>张三</td>
                        <td>13008831542</td>
                        <td>深圳市南山区科技园研祥科技大厦6A</td>
                        <td>Haval H8智尊</td>
                        <td>888888</td>
                        <td>A团队</td>
                        <td>
                            已联系
                        </td>
                        <td>
                            <a href="maintenanceDetail.html" class="btn btn-info btn-sm js-test-edit" data-id="">编辑</a>
                            <button type="button" data-id="{$vo.id}" class="btn btn-danger js-test-del">删除</button>
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
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
<script src="<?php echo __JS__ ?>/common/jquery.sidebar.min.js"></script>
<!-- Custom Js -->
<script src="<?php echo __JS__ ?>/common/boot.js"></script>
