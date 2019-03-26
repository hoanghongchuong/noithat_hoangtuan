<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->where('com','gioi-thieu')->where('status',1)->get();
    $categories = DB::table('product_categories')->where('com','san-pham')->orderBy('id','desc')->get();
?>
<header id="header" class="">
    <div class="container">
        <div class="row">
            <div class="top_header">
                <div class="col-md-3 col-xs-12 tac">
                    <a href="{{url('')}}" title="Logo"><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" class="logo-img" alt="Logo"></a>
                </div>
                <div class="col-md-7 col-xs-12 box-search">
                    <div class="search-text" id="search_text">
                        <form action="{{route('search')}}" method="get" accept-charset="utf-8">
                            <div class="form-group">
                                <input type="text" placeholder="Tìm kiếm sản phẩm" class="input-search text" name="txtSearch">
                                <button type="submit" class="btn btn-search" id="search_btn" name=""><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-2 box-count-cart col-xs-12">
                    <div class="box-shopping-cart">
                        <a href="{{url('gio-hang')}}">
                            <span class="icon-cart"><i class="fa fa-shopping-cart"></i></span>
                            <span class="title-count-cart">&nbsp; Sản phẩm </span>
                            <span class="count-cart">&nbsp;{{Cart::count()}}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>            
    </div>
</header><!-- /header -->
<div class="visible-xs visible-sm menu-mobile">
    <div class="vk-header__search">
        <div class="container">                
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
                <a href="#menu2" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                <ul class="collapse" id="menu2">
                    @foreach($categories as $category)
                    <li><a href="{{url('san-pham/'.$category->alias)}}">{{$category->name}}</a></li>
                    @endforeach                    
                </ul>
            </li>
            <li><a href="{{url('tin-tuc')}}">Tin tức</a></li>
            <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
        </ul>
    </nav>        
</div>
<div class="slider-mobile visible-xs">
    <div id="carousel-id" class="carousel slide" data-ride="carousel">                
        <div class="carousel-inner">
            @foreach($sliders as $k=>$slider)
            <div class="item @if($k==0) active @endif">
                <img  alt="" src="{{asset('upload/hinhanh/'.$slider->photo)}}">                
            </div>
            @endforeach
        </div>
        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
<div class="menu-cate visible-md visible-lg">
    <div class="top-menu">
        <div class="col-md-3"></div>
        <div class="col-md-9 menu ">
            <ul class="navi">
                <li class="@if(@$com == 'index') active @endif"><a href="{{url('')}}">Trang chủ</a></li>
                <li class="@if(@$com == 'gioi-thieu') active @endif"><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
                <li class="@if(@$com == 'san-pham') active @endif">
                    <a href="{{url('san-pham')}}">Sản phẩm hot</a>
                        <ul class="vk-menu__child">                                
                            @foreach($categories as $category)
                            <li><a href="{{url('san-pham/'.$category->alias)}}">{{$category->name}}</a></li>
                            @endforeach                        
                        </ul>
                </li>
                <li class="@if(@$com == 'tin-tuc') active @endif"><a href="{{url('tin-tuc')}}">Tin tức</a></li>
                <li class="@if(@$com == 'lien-he') active @endif"><a href="{{url('lien-he')}}">Liên hệ</a></li>
            </ul>
        </div>
    </div>
    <div class="bot-menu hidden-xs hidden-sm">
        <div class="col-md-3 ">
            <h3 class="title-cate">Danh mục sản phẩm</h3>
            <div class="list-cate-home">
                <ul>
                    @foreach($categories as $category)
                    <li><a href="{{url('san-pham/'.$category->alias)}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>    
        <div class="col-md-9 col-xs-12 slider">
            <div id="carousel-id1" class="carousel slide" data-ride="carousel">
                
                <div class="carousel-inner">
                    @foreach($sliders as $k=>$slider)
                    <div class="item @if($k==0) active @endif">
                        <img  alt="" src="{{asset('upload/hinhanh/'.$slider->photo)}}">
                    </div>
                    @endforeach
                </div>
                <a class="left carousel-control" href="#carousel-id1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel-id1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>    
    </div>
</div>