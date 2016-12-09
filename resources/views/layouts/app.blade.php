<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>企业网站模板</title>
    <link rel="stylesheet" href="/assets/css/amazeui.css" />
    <link rel="stylesheet" href="/assets/css/common.min.css" />
    @yield('css')
</head>
<body>
<div class="layout">
    <!--===========layout-header================-->
    <div class="layout-header am-hide-sm-only">
        <div class="header-box" data-am-sticky>
            <!--header start-->
            <div class="container">
                <div class="header">
                    <div class="am-g">
                        <div class="am-u-lg-2 am-u-sm-12">
                            <div class="logo">
                                <a href=""><img src="/assets/images/logo.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="am-u-md-10">
                            <div class="header-right am-fr">
                                <div class="header-contact">
                                    <div class="header_contacts--item">
                                        <div class="contact_mini">
                                            <i style="color:#7c6aa6" class="contact-icon am-icon-phone"></i>
                                            <strong>{{ appConfig('tel') }}</strong>
                                            <span>周一~周五, 8:00 - 20:00</span>
                                        </div>
                                    </div>
                                    <div class="header_contacts--item">
                                        <div class="contact_mini">
                                            <i style="color:#7c6aa6" class="contact-icon am-icon-envelope-o"></i>
                                            <strong>{{ appConfig('email') }}</strong>
                                            <span>随时欢迎您的来信！</span>
                                        </div>
                                    </div>
                                    <div class="header_contacts--item">
                                        <div class="contact_mini">
                                            <i style="color:#7c6aa6" class="contact-icon am-icon-map-marker"></i>
                                            <strong>{{ appConfig('address') }}</strong>
                                            <span>欢迎来访</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('contact') }}" class="contact-btn">
                                    <button type="button" class="am-btn am-btn-secondary am-radius">联系我们</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header end-->

            @inject('menus','App\widget\MenuNewsCat')
            <!--nav start-->
            <div class="nav-contain">
                <div class="nav-inner">
                    <ul class="am-nav am-nav-pills am-nav-justify">
                        <li class=""><a href="/">首页</a></li>
                        <li>
                            <a href="#">产品中心</a>
                            <!-- sub-menu start-->
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="{{ route('product',['id'=>1]) }}">产品展示1</a></li>
                                <li class="menu-item"><a href="{{ route('product',['id'=>2]) }}">产品展示2</a></li>
                                <li class="menu-item"><a href="{{ route('product',['id'=>3]) }}">产品展示3</a></li>
                            </ul>
                            <!-- sub-menu end-->
                        </li>
                        <li><a href="{{ route('example') }}">客户案例</a></li>
                        <li><a href="{{ route('solution') }}">解决方案</a></li>
                        <li>
                            <a href="{{ route('allNews') }}">新闻中心</a>
                            <!-- sub-menu start-->
                            <ul class="sub-menu">
                                @foreach($menus->list() as $menu)
                                    <li class="menu-item"><a href="{{ route('newsCat',['cat'=>$menu->id]) }}">{{ $menu->name }}</a></li>
                                @endforeach
                            </ul>
                            <!-- sub-menu end-->
                        </li>
                        <li><a href="{{ route('about') }}">关于我们</a></li>
                        <li><a href="{{ route('join') }}">加入我们</a></li>
                        <li><a href="{{ route('contact') }}">联系我们</a></li>
                    </ul>
                </div>
            </div>
            <!--nav end-->
        </div>
    </div>

    <!--mobile header start-->
    <div class="m-header">
        <div class="am-g am-show-sm-only">
            <div class="am-u-sm-2">
                <div class="menu-bars">
                    <a href="#doc-oc-demo1" data-am-offcanvas="{effect: 'push'}"><i class="am-menu-toggle-icon am-icon-bars"></i></a>
                    <!-- 侧边栏内容 -->
                    <nav data-am-widget="menu" class="am-menu  am-menu-offcanvas1" data-am-menu-offcanvas >
                        <a href="javascript: void(0)" class="am-menu-toggle"></a>

                        <div class="am-offcanvas" >
                            <div class="am-offcanvas-bar">
                                <ul class="am-menu-nav am-avg-sm-1">
                                    <li><a href="/" class="" >首页</a></li>
                                    <li class="am-parent">
                                        <a href="#" class="" >产品中心</a>
                                        <ul class="am-menu-sub am-collapse ">
                                            <li class="">
                                                <a href="{{ route('product',['id'=>1]) }}" class="" >产品展示1</a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('product',['id'=>2]) }}" class="" >产品展示2</a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('product',['id'=>3]) }}" class="" >产品展示3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="{{ route('example') }}" class="" >客户案例</a></li>
                                    <li class=""><a href="{{ route('solution') }}" class="" >解决方案</a></li>
                                    <li class="am-parent">
                                        <a href="{{ route('allNews') }}" class="" >新闻中心</a>
                                        <ul class="am-menu-sub am-collapse  ">
                                            @foreach($menus->list() as $menu)
                                            @endforeach
                                            <li class="">
                                                <a href="{{ route('newsCat',['cat'=>$menu->id]) }}" class="" >{{ $menu->name }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="{{ route('about') }}" class="" >关于我们</a></li>
                                    <li class=""><a href="{{ route('join') }}" class="" >加入我们</a></li>
                                    <li class=""><a href="{{ route('contact') }}" class="" >联系我们</a></li>
                                </ul>

                            </div>
                        </div>
                    </nav>

                </div>
            </div>
            <div class="am-u-sm-5 am-u-end">
                <div class="m-logo">
                    <a href=""><img src="/assets/images/logo.png" alt=""></a>
                </div>
            </div>
        </div>
        <!--mobile header end-->
    </div>

    @yield('layout')
</div>

@yield('sections')



<!--===========layout-footer================-->
<div class="layout-footer">
    <div class="footer">
        <div style="background-color:#383d61" class="footer--bg"></div>
        <div class="footer--inner">
            <div class="container">
                <div class="footer_main">
                    <div class="am-g">
                        <div class="am-u-md-3 ">
                            <div class="footer_main--column">
                                <strong class="footer_main--column_title">关于我们</strong>
                                <div class="footer_about">
                                    <p class="footer_about--text">
                                        云适配(AllMobilize Inc.) 是全球领先的HTML5企业移动化解决方案供应商，由前微软美国总部IE浏览器核心研发团队成员及移动互联网行业专家在美国西雅图创立.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="am-u-md-3 ">
                            <div class="footer_main--column">
                                <strong class="footer_main--column_title">产品中心</strong>
                                <ul class="footer_navigation">
                                    <li class="footer_navigation--item"><a href="#" class="footer_navigation--link">Enterplorer 企业浏览器</a></li>
                                    <li class="footer_navigation--item"><a href="#" class="footer_navigation--link">Xcloud 网站跨屏云</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="am-u-md-3 ">
                            <div class="footer_main--column">
                                <strong class="footer_main--column_title">技术支持</strong>
                                <ul class="footer_navigation">
                                    <li class="footer_navigation--item"><a href="#" class="footer_navigation--link">企业移动信息化白皮书</a></li>
                                    <li class="footer_navigation--item"><a href="#" class="footer_navigation--link">企业移动信息化白皮书</a></li>
                                    <li class="footer_navigation--item"><a href="#" class="footer_navigation--link">企业移动信息化白皮书</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="am-u-md-3 ">
                            <div class="footer_main--column">
                                <strong class="footer_main--column_title">联系详情</strong>
                                <ul class="footer_contact_info">
                                    <li class="footer_contact_info--item"><i class="am-icon-phone"></i><span>服务专线：{{ appConfig('tel') }}</span></li>
                                    <li class="footer_contact_info--item"><i class="am-icon-envelope-o"></i><span>{{ appConfig('email') }}</span></li>
                                    <li class="footer_contact_info--item"><i class="am-icon-map-marker"></i><span> {{ appConfig('address') }} </span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/assets/js/jquery-2.1.0.js" charset="utf-8"></script>
<script src="/assets/js/amazeui.js" charset="utf-8"></script>
<script src="/assets/js/common.js" charset="utf-8"></script>
@yield('script')
</body>
</html>
