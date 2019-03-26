@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>

<div class="content-box content-box-page">
    <nav aria-label="breadcrumb" class="nav-breadcrumb">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{url('gioi-thieu')}}">Báo giá</a></li>
                </ol>
            </div>
        </div>
    </nav>
    <div class="box-detail-news">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <h1 class="name_news_detail">{{$data->name}}</h1>
                    <div class="content_detail">
                        {!! $data->content !!}
                    </div>
                    <div class="comment-facebook">
                        <div class="fb-comments" data-href="{{URL::Current()}}" data-width="100%" data-numposts="2"></div>
                    </div>
                </div>
                @include('templates.sidebar_right')
            </div>
        </div>
    </div>
</div>


@endsection

