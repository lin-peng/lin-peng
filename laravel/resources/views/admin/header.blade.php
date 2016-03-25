<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="admin">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="outlogin">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="userlist"><i class="icon-font">&#xe008;</i>用户管理</a></li>
                        <li><a href="navlist"><i class="icon-font">&#xe005;</i>导航管理</a></li>
                         <li><a href="product"><i class="icon-font">&#xe006;</i>产品管理</a></li><li><a href="company"><i class="icon-font">&#xe004;</i>公司管理</a></li>
                        <li><a href="lunimg"><i class="icon-font">&#xe012;</i>轮播图管理</a></li>
                        <li><a href="policys"><i class="icon-font">&#xe052;</i>法律法规</a></li><!--
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li> -->
                    </ul>
                </li>
                <li>
                    <!-- <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a> -->
                    <ul class="sub-menu">
                        <!-- <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li> -->
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    @yield('content')