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
    @include('widget.contact')
@endsection
