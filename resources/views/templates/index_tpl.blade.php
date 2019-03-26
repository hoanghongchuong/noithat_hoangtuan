@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$sliders = DB::table('slider')->where('status',1)->where('com','gioi-thieu')->orderBy('id','desc')->first();
?>
<div class="slider">
    <img src="{{asset('upload/hinhanh/'.$sliders->photo)}}" alt="">
    <!-- <div class="container">
        <div class="row">
            <div id="carousel-id" class="carousel slide" data-ride="carousel">
               
                <div class="carousel-inner">
                    <div class="item">
                        <img src="images/slider.jpg">
                    </div>
                    <div class="item">
                       <img src="images/slider.jpg">
                       
                    </div>
                    <div class="item active">
                        
                       <img src="images/slider.jpg">
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
    </div> -->
</div>
<div class="content-home">
    <div class="container">
        <div class="row">
            <h2 class="title_home">Tại sao chọn chúng tôi</h2>
            <div class="dongke"><span></span></div>
            <div class="mt-30 box-why">
                @foreach($feedbacks as $fb)
                <div class="col-xs-12 col-md-4">
                    <p><img src="{{asset('upload/hinhanh/'.$fb->photo)}}" alt=""></p>
                    <p class="name_slogan">{{$fb->name}}</p>
                    <p class="des_slogan">{!! $fb->content !!}</p>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
</div>
<div class="content-home">
    <div class="container">
        <h2 class="title_home">Giới thiệu</h2>
        <div class="dongke"><span></span></div>
        <div class="box-about">
            <div class="col-md-6 col-xs-12 left">
                <p style="font-family: OpenB; font-size: 22px;">{{$about->name}}</p>
                {!! $about->mota !!}
            </div>
            <div class="col-md-6 col-xs-12 right">
                <img src="{{asset('upload/hinhanh/'.$about->photo)}}" alt="" style="width: 100%;">
            </div>
        </div>
    </div>
</div>
<div class="content-home">
    <div class="container">
        <h2 class="title_home">Sản phẩm</h2>
        <div class="dongke"><span></span></div>
        <div class="box-product-home">
            <div class="col-md-3 left pdr-0 pdl-0">
                <div class="title-cate"><h4>Danh mục sản phẩm</h4></div>
                <div class="list-category">
                    @foreach($categories_home as $category)
                    <p class=""><a href="{{url('san-pham/'.$category->alias)}}" title="{{$category->name}}">{{$category->name}}</a></p>
                    @endforeach
                </div>
                <div class="list-category box-support">
                    <div class="title-cate"><h4>Hỗ trợ trực tuyến</h4></div>
                    @foreach($partners as $p)
                    <div class="box1">
                        <p><img src="{{asset('upload/banner/'.$p->photo)}}" alt=""></p>
                        <p>SĐT: {{$p->phone}}</p>
                        <p>Email: {{$p->email}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-9 pdl-0 right">
                @foreach($categories_home as $category)
                <div class="box-cate1">
                    <div class="top-head">
                        <div class="pull-left"><span class="name-cate">{{$category->name}}</span></div>
                        <div class="pull-right"><a href="{{url('san-pham/'.$category->alias)}}" title="">Xem thêm</a></div>
                    </div>
                    <div class="list-item-product">
                        @foreach($category->products as $item)
                        <div class="col-md-4 mb-30">
                            <a href="{{url('san-pham/'.$item->alias.'.html')}}" title="{{$item->name}}">
                                <img src="{{asset('upload/product/'.$item->photo)}}" alt="{{$item->name}}">
                                <p class="product_name name_news"><a href="{{url('san-pham/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></p>
                            </a>
                            <p class="price">Giá: {{number_format($item->price)}} vnđ/kg</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="content-home box-news-home">
    <div class="container">
        <h2 class="title_home">Tin tức</h2>
        <div class="dongke"><span></span></div>
        
        <div class="list-item-news">
            <div class="owl-carousel owl-theme owl-carousel-news">
                @foreach($news as $n)
                <div class="item">
                    <a href="{{url('tin-tuc/'.$n->alias.'.html')}}" title="{{$n->name}}"><img src="{{asset('upload/news/'.$n->photo)}}" alt="{{$n->name}}">
                    </a>
                    <p class="name_news"><a href="{{url('tin-tuc/'.$n->alias.'.html')}}" title="{{$n->name}}">{{$n->name}}</a></p>
                    <div class="description-news">
                        {!! $n->mota !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
