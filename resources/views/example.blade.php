@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="/assets/css/example.min.css" />
@endsection

@section('layout')
    <!--===========layout-container================-->
    <div class="layout-container">
        <div class="page-header">
            <div class="am-container">
                <h1 class="page-header-title">客户案例</h1>
            </div>
        </div>

        <div class="breadcrumb-box">
            <div class="am-container">
                <ol class="am-breadcrumb">
                    <li><a href="../index.html">首页</a></li>
                    <li class="am-active">客户案例</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="section--header">
                <h2 class="section--title">全球首创 自主创新</h2>
                <p class="section--description">
                    Enterplorer Studio是一套面向企业级移动信息化建设的开发平台。集聚开发、测试、
                    <br>打包、发布于一体的移动化开发综合平台。
                </p>
            </div>

            <div class="example-container">
                <div class="am-tabs" data-am-tabs>
                    <ul class="am-tabs-nav am-nav am-nav-tabs am-g">
                        @foreach($examples as $example)
                            <li class="am-u-md-2
                            @if($loop->first)
                                    am-active
                            @endif
                            "><a href="#tab-4-{{ $loop->index }}"><i class="am-icon-map-o"></i>{{ $example->name }}</a></li>
                        @endforeach
                    </ul>
                    <div class="am-tabs-bd am-tabs-bd-ofv">
                        @foreach($examples as $example)
                            <div class="am-tab-panel
                            @if($loop->first)
                                am-active
                            @endif
                            " id="tab-4-{{ $loop->index }}">
                            @foreach( $example->images->chunk(4) as $images)
                                <div class="am-g">
                                     @foreach($images as $image)
                                        <div class="am-u-md-3">
                                                  <a href="#" style="background-image: url('{{ env('QINIU_CUSTOM_URL').'/'.$image->url }}');" class="example-item-bg"></a>
                                        </div>
                                     @endforeach
                                </div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
