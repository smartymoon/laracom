@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="/assets/css/news.min.css" />
@endsection

@section('layout')
    <!--===========layout-container================-->
    <div class="layout-container">
        <div class="page-header">
            <div class="am-container">
                <h1 class="page-header-title">{{ $category->name }}</h1>
            </div>
        </div>

        <div class="breadcrumb-box">
            <div class="am-container">
                <ol class="am-breadcrumb">
                    <li><a href="../index.html">首页</a></li>
                    <li class="am-active">{{ $category->name }}</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="section--header">
                <h2 class="section--title">最新新闻</h2>
                <p class="section--description">
                        {{ $newses->first()->abstract or '' }}
                </p>
            </div>

            <div class="news-contaier">
                <div class="blog">
                        @foreach($newses->chunk(3) as $three_newses)
                        <div class="am-g">
                            @foreach($three_newses as $news)
                            <div class="am-u-lg-4 am-u-md-6 am-u-end">
                                <div class="article">
                                    <div class="article-img">
                                        <img src="{{ env('QINIU_CUSTOM_URL').'/'.$news->cover }}" alt="" />
                                    </div>
                                    <div class="article-header">
                                        <h2><a href="#" rel="">{{ $news->title }}</a></h2>
                                        <ul class="article--meta">
                                            <li class="article--meta_item -date">{{ $news->created_at }}</li>
                                        </ul>
                                    </div>
                                    <div class="article--content">
                                        <p>{{ $news->abstract }}</p>
                                    </div>
                                    <div class="article--footer">
                                        <a href="{{ route('news',['news'=>$news->id]) }}" class="link">详情</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                    <!-- pagination-->
                    {{ $newses->links('vendor.pagination.amazeui') }}
                </div>
            </div>
        </div>
    </div>



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

