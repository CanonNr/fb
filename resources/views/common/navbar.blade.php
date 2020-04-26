+<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <h3>
            Five Buy 管理后台
        </h3>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">

                <li class="active has-sub">
                    <a class="js-arrow" href="/">
                        <i class="fas fa-tachometer-alt"></i> 首 页
                    </a>
                </li>

                <li>
                    <a href="/admin/user">
                        <i class="fas fa-chart-bar"></i> 用 户 管 理</a>
                </li>
                <li>
                    <a href="/admin/category">
                        <i class="far fa-check-square"></i> 商 品 分 类
                    </a>
                </li>
                <li>
                    <a href="/admin/goods">
                        <i class="fas fa-align-center"></i> 商 品 管 理
                    </a>
                </li>

                <li>
                    <a href="/admin/order">
                        <i class="far fa-check-square"></i> 订 单 管 理
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<div class="page-container">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">
                    <form class="form-header" action="" method="POST">

                    </form>
                    <div class="header-button">
                        <div class="account-wrap">
                            <div class="account-item clearfix js-item-menu">

                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{session('user')[0]['username']}}</a>
                                </div>

                                <div class="account-dropdown js-dropdown">
                                    <div class="account-dropdown__footer">
                                        <a href="/admin/logout">
                                            <i class="zmdi zmdi-power"></i> 退 出 </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER DESKTOP-->

