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
    @include('widget.contact')
@endsection

