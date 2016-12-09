@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="/assets/css/contact.min.css" />
    <link rel="stylesheet" href="/packages/swal/sweetalert.css" />
@endsection
@section('layout')
    <div class="layout-container">
        <div class="page-header">
            <div class="am-container">
                <h1 class="page-header-title">联系我们</h1>
            </div>
        </div>

        <div class="breadcrumb-box">
            <div class="am-container">
                <ol class="am-breadcrumb">
                    <li><a href="">首页</a></li>
                    <li class="am-active">联系我们</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="section--header">
                <h2 class="section--title">保持联系!</h2>
                <p class="section--description">
                    云适配致力于为企业提供全球最先进的移动化技术帮助企业最高效安全实现生产力提升<br/>
                    One Web，Any Device
                </p>
            </div>

            <div class="section-container">
                <div class="am-g">
                    <!--contact-left start-->
                    <div class="am-u-md-5">
                        <ul class="contact-left">
                            <li class="contact-box-item">
                                <div class="contact_item">
                                    <i class="contact_item--icon am-icon-phone"></i>
                                    <h3 class="contact_item--title">联系我们</h3>
                                    <p class="contact_item--text">
                                        联系电话： <strong>{{ appConfig('tel') }}</strong>,
                                        <br> 周一 ~ 周五, 8:00 - 17:00
                                    </p>
                                </div>
                            </li>
                            <li class="contact-item">
                                <div class="contact_item">
                                    <i class="contact_item--icon am-icon-envelope-o"></i>
                                    <h3 class="contact_item--title"> 发邮件 </h3>
                                    <p class="contact_item--text">
                                        {{ appCOnfig('email') }}, <br/>期待您的来信...
                                    </p>
                                </div>
                            </li>
                            <li class="contact-item">
                                <div class="contact_item">
                                    <i class="contact_item--icon am-icon-map-marker"></i>
                                    <h3 class="contact_item--title"> 参观我们 </h3>
                                    <p class="contact_item--text">
                                        {{ appConfig('address') }}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--contact-left end-->

                    <!--contact-right start-->
                    <div class="am-u-md-7">
                        <div class="contact-form">
                            <h3 class="contact-form_title">留言</h3>
                            <form method="post" action="{{ route('message') }}" class="am-form" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="am-g">
                                    <div class="am-u-md-6">
                                        <input type="text" name="name" class="" id="doc-ipt-email-1" placeholder="姓名">
                                    </div>
                                    <div class="am-u-md-6">
                                        <input type="email" name="email" class="" id="doc-ipt-email-2" placeholder="Email">
                                    </div>
                                </div>

                                <div class="am-g">
                                    <div class="am-u-md-6">
                                        <input type="text" name="tel" class="" id="doc-ipt-email-3" placeholder="电话">
                                    </div>
                                </div>
                                <div class=am-g>
                                    <div class="am-u-md-12">
                                        <div class="am-form-group">
                                            <textarea name="content" class="" rows="5" id="doc-ta-1" placeholder="写下你想说的..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class=am-g>
                                    <div class="am-u-md-12">
                                        {!! Geetest::render() !!}
                                    </div>
                                </div>

                                <div class="am-g">
                                    <div class="am-u-md-9">
                                        <div class="am-form-group am-form-file">
                                            <button type="button" class="am-btn am-btn-default am-btn-sm btn-change">
                                                <i class="am-icon-cloud-upload"></i> 上传文件</button>
                                            <input type="file" name="file">
                                        </div>
                                    </div>
                                    <div class="am-u-md-3">
                                        <p><button type="submit" class="am-btn am-btn-default btn-reguest am-fr btn-fl">提交</button></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--contact-right end-->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('sections')
    <div class="loading-cover">
        <img src="/image/jz.gif" alt="">
    </div>
@endsection

@section('script')
    <script src="/packages/swal/sweetalert.min.js"></script>
    <script>
        $(function(){

            $(document).ajaxStart(function(){
                $('.loading-cover').show();
                $('.loading-cover img').show();
            });

            $(document).ajaxStop(function(){
                $('.loading-cover').hide();
                $('.loading-cover img').hide();
            });

            $('form').submit(function(){
                if(!$('.gt_ajax_tip').hasClass('success')){
                    return false;
                }
                $.ajax({
                   url: $(this).attr('action'),
                   method: "POST",
                   data: new FormData(this),
                   processData: false,
                   contentType: false,
                   success:function(){
                       swal({
                          title:'提交成功',
                          type:'success',
                       },function(){
                           location.href = '/';
                       })
                   },
                   error:function(response){
                       var info = '';
                       $.each(response.responseJSON,function(i,item){
                            $.each(item,function(k,v){
                               info += v;
                               info += '<br>';
                            })
                       })
                       swal({
                           title:'',
                           text:info,
                           type:'warning',
                           html:true,
                       });
                   },
                });
                return false;
            })
        })
    </script>
@endsection
