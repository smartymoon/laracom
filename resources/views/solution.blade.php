@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="/assets/css/solution.min.css" />
@endsection

@section('layout')

    <!--===========layout-container================-->
    <div class="layout-container">
        <div class="solution-page">
            <div class="container">
                <h2>自主创新跨平台企业级解决方案</h2>
                <p>光明网曾考虑过通过原生App来实现移动化，但是由于无法复用原始业务流程和数据就放弃了，直到选用了云适配整体解决方案后，可以很方便的在Enterplorer上使用一个帐号登录我们的系统，通过VPN随时进入内网。</p>
                <button type="button" class="am-btn am-btn-secondary am-round">了解更多</button>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="section--header">
                <h2 class="section--title">解决方案案例展示</h2>
                <p class="section--description">
                    全球独创专利技术：一行代码部署，帮助企业快速安全地将现有PC版网页适配成HTML5跨屏网页，跨平台的企业统一办公
                    <br>门户，快捷的移动适配开发能力，完备的数据安全保护
                </p>
            </div>

            <div class="solution-container">
                <div data-am-widget="tabs"
                     class="am-tabs "
                >
                    <ul class="am-tabs-nav am-cf">
                        <li class="am-active"><a href="[data-tab-panel-0]">青春</a></li>
                        <li class=""><a href="[data-tab-panel-1]">彩虹</a></li>
                        <li class=""><a href="[data-tab-panel-2]">歌唱</a></li>
                        <li class=""><a href="[data-tab-panel-3]">歌唱</a></li>
                    </ul>
                    <div class="am-tabs-bd">
                        <div data-tab-panel-0 class="am-tab-panel am-active">
                            <div class="am-g">
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-1.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-2.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-3.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-4.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-5.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-6.png" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div data-tab-panel-1 class="am-tab-panel ">
                            <div class="am-g">
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-1.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-2.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-3.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-4.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-5.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-6.png" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div data-tab-panel-2 class="am-tab-panel ">
                            <div class="am-g">
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-1.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-2.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-3.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-4.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-5.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-6.png" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div data-tab-panel-3 class="am-tab-panel ">
                            <div class="am-g">
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-1.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-2.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-3.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-4.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-5.png" alt="" /></a>
                                </div>
                                <div class="am-u-md-4 am-u-sm-6">
                                    <a href="#"><img src="../assets/images/solution/solution-show-6.png" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="section" style="background:#f3f4f4;">
        <div class="container">
            <div class="section--header">
                <h2 class="section--title">O2O解决方案</h2>
                <p class="section--description">
                    全球独创专利技术：一行代码部署，帮助企业快速安全地将现有PC版网页适配成HTML5跨屏网页，跨平台的企业统一办公
                    <br/>门户，快捷的移动适配开发能力，完备的数据安全保护
                </p>
            </div>

            <div class="o2o-container">
                <div class="am-g">
                    <div class="am-u-md-4">
                        <div class="o2o-box">
                            <img src="../assets/images/solution/o2o-img-1.png" alt="" />
                            <div class="o2o-content">
                                <h3>遭遇黑客攻击</h3>
                                <p>安全意识很重要，要提前做好预防工作，保障系统安全。推荐使用大禹分布式防御</p>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-md-4">
                        <div class="o2o-box">
                            <img src="../assets/images/solution/o2o-img-2.png" alt="" />
                            <div class="o2o-content">
                                <h3>UGC内容鉴别</h3>
                                <p>安全意识很重要，要提前做好预防工作，保障系统安全。推荐使用大禹分布式防御</p>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-md-4">
                        <div class="o2o-box">
                            <img src="../assets/images/solution/o2o-img-3.png" alt="" />
                            <div class="o2o-content">
                                <h3>处理能力</h3>
                                <p>安全意识很重要，要提前做好预防工作，保障系统安全。推荐使用大禹分布式防御</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <div class="section">
        <div class="container">
            <div class="section--header">
                <h2 class="section--title">服务合作厂家</h2>
                <p class="section--description">
                    全球独创专利技术：一行代码部署，帮助企业快速安全地将现有PC版网页适配成HTML5跨屏网页，跨平台的企业统一办公
                    <br/>门户，快捷的移动适配开发能力，完备的数据安全保护
                </p>
            </div>

            <div class="cooperation-container">
                <div data-am-widget="tabs"
                     class="am-tabs"
                >
                    <ul class="am-tabs-nav am-cf">
                        <li class="am-active"><a href="[data-tab-panel-0]">营销推广</a></li>
                        <li class=""><a href="[data-tab-panel-1]">金融服务</a></li>
                        <li class=""><a href="[data-tab-panel-2]">行业软件</a></li>
                        <li class=""><a href="[data-tab-panel-3]">托管服务</a></li>
                    </ul>
                    <div class="am-tabs-bd">
                        <div data-tab-panel-0 class="am-tab-panel am-active">
                            <ul class="am-avg-md-5 am-avg-sm-3 am-thumbnails">
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo1.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo2.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo3.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo4.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo5.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo6.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo7.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo8.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo9.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo10.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo11.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo12.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo13.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo14.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo15.jpg" /></a></li>
                            </ul>
                        </div>
                        <div data-tab-panel-1 class="am-tab-panel ">
                            <ul class="am-avg-md-5 am-avg-sm-3 am-thumbnails">
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo1.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo2.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo3.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo4.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo5.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo6.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo7.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo8.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo9.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo10.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo11.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo12.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo13.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo14.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo15.jpg" /></a></li>
                            </ul>
                        </div>
                        <div data-tab-panel-2 class="am-tab-panel ">
                            <ul class="am-avg-md-5 am-avg-sm-3 am-thumbnails">
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo1.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo2.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo3.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo4.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo5.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo6.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo7.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo8.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo9.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo10.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo11.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo12.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo13.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo14.jpg" /></a></li>
                                <li><a href="#"><img class="am-thumbnail" src="../assets/images/solution/cooperation-logo15.jpg" /></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('widget.contact')
@endsection
