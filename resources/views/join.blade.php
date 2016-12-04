@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="/assets/css/join.min.css" />
@endsection

@section('layout')
    <div class="layout-container">
        <div class="page-header">
            <div class="am-container">
                <h1 class="page-header-title">加入我们</h1>
            </div>
        </div>

        <div class="breadcrumb-box">
            <div class="am-container">
                <ol class="am-breadcrumb">
                    <li><a href="../index.html">首页</a></li>
                    <li class="am-active">加入我们</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="section--header">
                <h2 class="section--title">我们的优势</h2>
                <p class="section--description">
                    我们开创了中国首个开源HTML5跨屏前端框架、可见即可得的IDE、无障碍网页我们是全球独一无二的
                    <br>云适配技术，我们的目标是打造极致的网页体验。
                </p>
            </div>

            <div class="join-container">
                <div class="am-g">
                    <div class="am-u-md-3">
                        <div class="careers--articles">
                            <h3 class="careers--subtitle">Why Work For Us?</h3>
                            <div class="careers_articles">
                                <div class="careers_article">
                                    <i class="careers_article--icon am-icon-diamond"></i>
                                    <h3 class="careers_article--title">我们的团队</h3>
                                    <div class="careers_article--text">
                                        <p>
                                            成员既有超级学霸（来自Harvard、Google、香港科技大学、中国科技大学），也有来自行业的技术大拿。
                                        </p>
                                    </div>
                                    <div class="careers_article--footer"><a href="#" class="link">Learn More</a></div>
                                </div>
                                <div class="careers_article">
                                    <i class="careers_article--icon am-icon-key"></i>
                                    <h3 class="careers_article--title">我们的装备和趴体</h3>
                                    <div class="careers_article--text">
                                        <p>
                                            顶配iMac、MacBook Pro、MacBook Air 3台瑞士Air空气净化器，PM2.5常年低于50,大趴每月一次，周三享用不尽的免费零食、饮料、水果
                                        </p>
                                    </div>
                                    <div class="careers_article--footer"><a href="#" class="link">Learn More</a></div>
                                </div>
                                <div class="careers_article">
                                    <i class="careers_article--icon am-icon-paper-plane-o"></i>
                                    <h3 class="careers_article--title">我们的队友</h3>
                                    <div class="careers_article--text">
                                        <p>
                                            充满热情的队友，也是一起撸串、篮球、足球、动感单车、甚至桌上足球组队互虐的好基友
                                        </p>
                                    </div>
                                    <div class="careers_article--footer"><a href="#" class="link">Learn More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="am-u-md-9">
                        <h3 class="careers--subtitle">We Are Looking For:</h3>
                        <div class="careers--vacancies">
                            <div class="am-panel-group" id="accordion">
                                @foreach($jobs as $job)
                                <div class="am-panel am-panel-default">
                                    <div class="am-panel-hd">
                                        <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-{{ $loop->index }}'}">
                                            {{$job->name}}&nbsp;{{ $job->number }}人
                                        </h4>
                                    </div>
                                    <div id="do-not-say-{{ $loop->index }}" class="am-panel-collapse am-collapse
                                        @if ($loop->first)
                                            am-in
                                        @endif
                                    ">
                                        <div class="am-panel-bd">
                                            <div class="vacancies--item_content js-accordion--pane_content" style="">
                                                {!! $job->required !!}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
