@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="/assets/css/contact.min.css" />
    <link rel="stylesheet" href="/packages/swal/sweetalert.css" />
@endsection
@section('layout')
    <div class="layout-container">
        <div class="page-header">
            <div class="am-container">
                <h1 class="page-header-title">Contact Us</h1>
            </div>
        </div>

        <div class="breadcrumb-box">
            <div class="am-container">
                <ol class="am-breadcrumb">
                    <li><a href="../index.html">首页</a></li>
                    <li class="am-active">联系我们</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="section--header">
                <h2 class="section--title">Get In Touch!</h2>
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
                                    <h3 class="contact_item--title">Call Us</h3>
                                    <p class="contact_item--text">
                                        联系电话： <strong>400-069-0309</strong>,
                                        <br> Monday - Friday, 8am - 7pm
                                    </p>
                                </div>
                            </li>
                            <li class="contact-item">
                                <div class="contact_item">
                                    <i class="contact_item--icon am-icon-envelope-o"></i>
                                    <h3 class="contact_item--title">Drop a Line</h3>
                                    <p class="contact_item--text">
                                        service@yunshipei.com, <br/>期待您的来信...
                                    </p>
                                </div>
                            </li>
                            <li class="contact-item">
                                <div class="contact_item">
                                    <i class="contact_item--icon am-icon-map-marker"></i>
                                    <h3 class="contact_item--title">Visit Us</h3>
                                    <p class="contact_item--text">
                                        北京市海淀区海淀大街27号天使大厦（原亿景大厦）三层西侧
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--contact-left end-->

                    <!--contact-right start-->
                    <div class="am-u-md-7">
                        <div class="contact-form">
                            <h3 class="contact-form_title">Your Request</h3>
                            <form method="post" action="{{ route('message') }}" class="am-form">
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
    <div class="section" style="margin-top:0px;background-image: url('/assets/images/pattern-light.png');">
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

@section('script')
    <script src="/packages/swal/sweetalert.min.js"></script>
    <script>
        window.geek_switch = false;
        $(function(){
            $('form').submit(function(){
                if(!window.geek_switch){
                    return false;
                }
                var data = $(this).serialize();
                data._token = '{{ csrf_token() }}';
                $.ajax({
                   url: $(this).attr('action'),
                   method: "POST",
                   data:data,
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
