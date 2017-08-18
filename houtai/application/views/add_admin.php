<?php
$userInfo = $this->session->userdata('userInfo');
$count = $this->session->userdata('count');
$member = $this->session->userdata('member');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <script src="assets/js/echarts.min.js"></script>
    <link rel="stylesheet" href="assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="assets/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="assets/css/app.css">
    <script src="assets/js/jquery.min.js"></script>

</head>

<body data-type="index">
<script src="assets/js/theme.js"></script>
<div class="am-g tpl-g">
    <!-- 头部 -->
    <header>
        <!-- logo -->
        <div class="am-fl tpl-header-logo" style="line-height: 57px">
            <!--<a href="javascript:;"><img src="assets/img/login.png" alt="" width="468px"; height="60px";></a>-->
            <span style="color: #CFCFCF; position: absolute; left: 20px;">猫言猫语后台</span>
        </div>
        <!-- 右侧内容 -->
        <div class="tpl-header-fluid">
            <!-- 侧边切换 -->
            <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                </span>
            </div>
            <!-- 搜索 -->
            <div class="am-fl tpl-header-search">
                <form class="tpl-header-search-form" action="javascript:;">
                    <button class="tpl-header-search-btn am-icon-search"></button>
                    <input class="tpl-header-search-box" type="text" placeholder="搜索内容...">
                </form>
            </div>
            <!-- 其它功能-->
            <div class="am-fr tpl-header-navbar">
                <ul>
                    <!-- 欢迎语 -->
                    <li class="am-text-sm tpl-header-navbar-welcome">
                        <a href="javascript:;">欢迎你, <span><?php echo $userInfo->admin_name;?></span> </a>
                    </li>
                    <!-- 退出 -->
                    <li class="am-text-sm">
                        <a href="welcome/login">
                            <span class="am-icon-sign-out"></span>退出
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </header>
    <!-- 侧边导航栏 -->
    <div class="left-sidebar">
        <!-- 用户信息 -->
        <div class="tpl-sidebar-user-panel">
            <div class="tpl-user-panel-slide-toggleable">
                <div class="tpl-user-panel-profile-picture">
                    <div style="width: 82px;height: 82px;background-image: url('assets/img/<?php if($userInfo->admin_photo == '') echo 'user01.png' ; else{ echo $userInfo->admin_photo;}?>'); background-position: center;  -webkit-background-size: ;background-size: cover;"></div>
                </div>
                <span class="user-panel-logged-in-text">
                        <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
                    <?php echo $userInfo->admin_name;?>
                    </span>
            </div>
        </div>

        <!-- 菜单 -->
        <ul class="sidebar-nav">
            <li class="sidebar-nav-link">
                <a href="welcome/home">
                    <i class="am-icon-home sidebar-nav-link-logo"></i> 首页
                </a>
            </li>
            <li class="sidebar-nav-link">
                <a href="tables.html">
                    <i class="am-icon-table sidebar-nav-link-logo"></i> 发布文章
                </a>
            </li>
            <li class="sidebar-nav-link">
                <a href="calendar.html">
                    <i class="am-icon-calendar sidebar-nav-link-logo"></i> 消息管理
                </a>
            </li>
            <li class="sidebar-nav-link">
                <a href="javascript:;" class="sidebar-nav-sub-title">
                    <i class="am-icon-table sidebar-nav-link-logo"></i> 商品管理
                    <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                </a>
                <ul class="sidebar-nav sidebar-nav-sub">
                    <li class="sidebar-nav-link">
                        <a href="table-list.html">
                            <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 商品信息
                        </a>
                    </li>

                    <li class="sidebar-nav-link">
                        <a href="table-list-img.html">
                            <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 订单信息
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-nav-link">
                <a href="javascript:void(0);" class="active">
                    <i class="am-icon-clone sidebar-nav-link-logo"></i> 添加管理员
                    <span class="am-badge am-badge-secondary sidebar-nav-link-logo-ico am-round am-fr am-margin-right-sm"><?php echo $count;?></span>
                </a>
            </li>
        </ul>
    </div>


    <!-- <!-- 内容区域 -->
    <div class="tpl-content-wrapper" style="background: #282D2F;">
        <div class="tpl-login-content" >
            <form class="am-form tpl-form-line-form" method="post" action="welcome/add_admin">
                <div class="am-form-group">
                    <input type="text" class="tpl-form-input" id="username" name="username" placeholder="请输入姓名">

                </div>

                <div class="am-form-group">
                    <input type="password" class="tpl-form-input" id="password" name="password" placeholder="请输入密码">

                </div>
                <div class="am-form-group" onClick="return confirm('确认添加？')">

                    <input type="submit" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn" name="sub">

                </div>
            </form>
        </div>
    </div>
</div>
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/amazeui.datatables.min.js"></script>
<script src="assets/js/dataTables.responsive.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>