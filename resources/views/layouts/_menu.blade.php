<div id="main-menu" data-scroll-to-active="true" class="main-menu menu-dark menu-fixed menu-shadow menu-accordion">
    <!-- main menu header-->
    <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            {{-- <li class=" nav-item">
                <a href="#">
                    <i class="icon-home3"></i>
                    <span data-i18n="nav.dash.main" class="menu-title">Dashboard</span>
                    <span class="tag tag tag-primary tag-pill float-xs-right mr-2">2</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="index.html" data-i18n="nav.dash.main" class="menu-item">Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="dashboard-2.html" data-i18n="nav.dash.main" class="menu-item">Dashboard 2</a>
                    </li>
                </ul>
            </li> --}}
            <li class="active nav-item">
                <a href="{{route('invoice.create')}}">
                    <i class="icon-paper"></i>
                    <span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">Facturas</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- /main menu content-->
    <!-- main menu footer-->
    {{-- <div class="main-menu-footer footer-close">
        .....
    </div> --}}
    <!-- main menu footer-->
</div>