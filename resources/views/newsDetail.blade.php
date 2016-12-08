@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="/assets/css/news.min.css" />
@endsection

@section('layout')
    <!--===========layout-container================-->
    <div class="layout-container">
        <div class="page-header">
            <div class="am-container">
                <h1 class="page-header-title">新闻</h1>
            </div>
        </div>

        <div class="breadcrumb-box">
            <div class="am-container">
                <ol class="am-breadcrumb">
                    <li><a href="/">首页</a></li>
                    <li class="am-active">新闻</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="section news-section">
        <div class="container">
            <!--news-section left start-->
            <div class="am-u-md-9">
                <div class="article">
                    <header class="article--header">
                        <h2 class="article--title"><a href="#" rel="">{{ $news->title  }}</a></h2>
                        <ul class="article--meta">
                            <li class="article--meta_item"><i class="am-icon-calendar"></i>{{ $news->created_at }}</li>
                        </ul>
                    </header>
                    <div class="article--content">
                        {{ $news->content }}
                    </div>
                </div>
            </div>
            <!--news-section left end-->
            <!--news-section right start-->
            <div class="am-u-md-3">
                <div class="blog_sidebar">
                    <div class="widget">
                        <h2 class="widget--title"><i class="am-icon-file-text-o"></i>资讯分类</h2>
                        <ul>
                            @inject('menus','App\widget\MenuNewsCat')
                            @foreach($menus->list() as $menu)
                                <li><a href="{{ route('newsCat',['cat'=>$menu->id]) }}">{{  $menu->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!--news-section right end-->
        </div>
    </div>
@endsection

@section('sections')
    <div class="section" style="margin-top:0px;background-image: url('../assets/images/pattern-light.png');">
        <div class="container">
            <!--index-container start-->
            <div class="index-container">
                <div class="am-g">
                    <div class="am-u-md-4">
                        <div class="contact_card">
                            <i style="color:#59bcdb" class="contact_card--icon am-icon-phone"></i>
                            <strong class="contact_card--title">Contact Us</strong>
                            <p class="contact_card--text">Feel free to call us on <br> <strong>0 (855) 233-5385</strong> <br> Monday - Friday, 8am - 7pm</p>
                            <button type="button" class="am-btn am-btn-secondary">Order a Call Back</button>
                        </div>
                    </div>
                    <div class="am-u-md-4">
                        <div class="contact_card">
                            <i style="color:#59bcdb" class="contact_card--icon am-icon-envelope-o"></i>
                            <strong class="contact_card--title">Our Email</strong>
                            <p class="contact_card--text">Drop us a line anytime at <br> <strong><a href="mailto:info@financed.com">info@financed.com</a>,</strong> <br> and we’ll get back soon.</p>
                            <button type="button" class="am-btn am-btn-secondary">Start Writing</button>
                        </div>
                    </div>
                    <div class="am-u-md-4">
                        <div class="contact_card">
                            <i style="color:#59bcdb" class="contact_card--icon am-icon-map-marker"></i>
                            <strong class="contact_card--title">Our Address</strong>
                            <p class="contact_card--text">Come visit us at <br> <strong>Stock Building, New York,</strong> <br> NY 93459</p>
                            <button type="button" class="am-btn am-btn-secondary">See the Map</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--index-container end-->
        </div>
    </div>
@endsection
