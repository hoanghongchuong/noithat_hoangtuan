<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->where('com','gioi-thieu')->where('status',1)->get();
    $categories = DB::table('product_categories')->where('com', 'san-pham')->where('status',1)->where('parent_id', 0)->get();
?>
<header id="header" class="">
    <div class="container">
        <div class="row">
            <div class="top_header">
                <div class="col-md-3 col-xs-12 box-logo">
                    <a href="" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" class="logo-img" alt=""></a>
                </div>
                <div class="col-md-9 col-xs-12">
                    <p class="company_name">{{$setting->company}}</p>
                    <p class="company_namex">Đặc sản chè thái nguyên</p>
                    <div class="box-item-header col-xs-12 col-md-4 hidden-xs">
                        <div class="col-md-2 col-xs-2"><img src="{{asset('public/images/add.png')}}" alt=""></div>
                        <div class="col-md-10 col-xs-10 pdr-0" style="font-size: 16px">
                           {{$setting->address}}
                        </div>
                    </div>
                    <div class="box-item-header col-xs-12 col-md-4 hidden-xs">
                        <div class="col-md-2 col-xs-2 pdl-0"><img src="{{asset('public/images/times.png')}}" alt=""></div>
                        <div class="col-md-10 col-xs-10">
                            8h - 17h30 <br>
                            Hỗ trợ 24/7
                        </div>
                    </div>
                    <div class="box-item-header col-xs-12 col-md-4 hidden-xs">
                        <div class="col-md-2 col-xs-2"><img src="{{asset('public/images/phone.png')}}" alt=""></div>
                        <div class="col-md-10 col-xs-10" style="margin-top: -7px; font-size: 16px;">
                            {{$setting->phone}}<br>
                            {{$setting->hotline}} <br>
                            {{$setting->copyright}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</header><!-- /header -->

<div class="menu visible-lg visible-md">         
    <div class="container">
        <ul class="navi">
            <li class="@if(@$com =='index')active @endif"><a href="{{url('')}}">Trang chủ</a></li>
            <li class="@if(@$com =='gioi-thieu')active @endif">
                <a href="{{url('gioi-thieu')}}">
                    Giới thiệu
                </a>
                
            </li>
            <li class="@if(@$com =='san-pham')active @endif">
                <a href="{{url('san-pham')}}">Sản phẩm
                </a>
                <!-- <ul class="vk-menu__child">
                    <li><a href="">Công trình 1</a></li>
                    <li><a href="">Công trình 1</a></li>
                    <li><a href="">Công trình 1</a></li>                        
                </ul> -->
            </li>
            <li class="@if(@$com =='van-hoa')active @endif">
                <a href="{{url('van-hoa-tra')}}">Văn hóa trà</a>                    
            </li>
            
            <li class="@if(@$com =='tin-tuc') active @endif"><a href="{{url('tin-tuc')}}" title="">Tin tức</a></li>
            <li class="@if(@$com =='lien-he')active @endif"><a href="{{url('lien-he')}}" title="">Liên hệ</a></li>
            <li class="box-search">
                <div class="search-text" id="search_text">
                    <form action="{{route('search')}}" method="get" accept-charset="urf-8">
                        <div class="form-group" style="margin-bottom: 0px;">
                            <input type="text" placeholder="Tìm kiếm sản phẩm" class="input-search text" name="txtSearch">
                            <input type="submit" class="btn-search" id="search_btn" name="">
                        </div>
                    </form>
                </div>
            </li>
            <li class="icon-shopping"><a href="{{url('gio-hang')}}"><i class="fa fa-shopping-cart"></i></a></li>
        </ul> 
    </div>           
</div>
<div class="visible-xs visible-sm">
    <div class="vk-header__search">
        <div class="container">
            <span class="icon-shopping"><a href=""><i class="fa fa-shopping-cart"></i></span> &nbsp;
            <a href="#menuMobile" class="menu_Mobile" data-toggle="collapse" class="_btn d-lg-none menu_title"><i class="fa fa-bars"></i> Menu</a>
        </div>
    </div>
    <nav class="vk-header__menu-mobile">
        <ul class="vk-menu__mobile collapse" id="menuMobile">
            <li><a href="{{url('')}}">Trang chủ</a></li>
            <li>
                <a href="{{url('gioi-thieu')}}">Giới thiệu</a>
                
            </li>
            <li>
                <a href="{{url('san-pham')}}">Sản phẩm</a>
                <!-- <a href="#menu1" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                <ul class="collapse" id="menu1">
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    
                </ul> -->
            </li>
            <li><a href="{{url('van-hoa')}}">Văn hóa trà</a></li>
            <li><a href="{{url('tin-tuc')}}">Tin tức</a></li>
            <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
            
        </ul>
    </nav>
    
</div>