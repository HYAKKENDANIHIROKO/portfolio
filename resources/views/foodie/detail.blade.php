@extends('layouts.common')
@section('title', 'お店の詳細画面')
<link href="{{ asset('css/search.css') }}" rel="stylesheet">
@section('content')
    <div class="top-wrapper"> 
        <div class="container mt-5">
            <div class="row">
                <div class="border p-5 mt-5 bg-light col-md-12 mx-auto">
                    <div class="header">
                        <div class="header-wrapper">
                            <div class="form-group row">
                                <h3 class="shop_name pt-1 mb-1 col-md-7">お店の名前</h3>
                                <div class="col-md-5  d-flex p-3 justify-content-end"><a href="" class="btn btn-success" role="button">口コミ投稿</a></div>
                                <p class="price col-md-5">値段</p>
                            </div>
                                
                        </div>    
                    </div>
                   
                </div>
            </div>
            <div class="row">
                    <ul class="nav nav-tabs nav-pills nav-fill col-md-9">
                        <li class="nav-item bg-danger">
                            <a class="nav-link bg-danger active" id="pills-top-tab" data-togle="pill" href="#pills-top" role="tab" area-controls="pills-top" area-selected="true">トップ</a>
                        </li>
                        <li class="nav-item bg-danger">
                            <a class="nav-link" id="pills-seat-tab" data-toggle="pill" href="#pills-seat" role="tab" area-controls="pills-seat" area-selected="false">座席</a>
                        </li>
                        <li class="nav-item bg-danger">
                            <a class="nav-link" id="pills-menu-tab" data-toggle="pill" href="#pills-menu" role="tab" area-controls="pills-menu" area-selected="false">メニュー</a>
                        </li>
                        <li class="nav-item bg-danger">
                            <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" area-controls="pills-map" area-selected="false">地図</a>
                        </li>
                        <li class="nav-item bg-danger">
                            <a class="nav-link" id="pills-image-tab "data-toggle="pill" href="#pills-image" role="tab" area-controls="pills-image" area-selected="false">画像</a>
                        </li>
                        <li class="nav-item bg-danger">
                            <a class="nav-link" id="pills-comment-tab "data-toggle="pill" href="#pills-comment" role="tab" area-controls="pills-comment" area-selected="false">口コミ</a>
                        </li>
                    </ul> 
                    <div class="tab-content col-md-4" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-top" role="tabpanel" aria-labelledby="pills-top-tab">基本情報</div>
                        <div class="tab-pane fade" id="pills-seat" role="tabpanel" aria-labelledby="pills-seat-tab">席の種類　席数</div>
                        <div class="tab-pane fade" id="pills-menu" role="tabpanel" aria-labelledby="pills-menu-tab">メニュー</div>
                        <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">住所</div>
                        <div class="tab-pane fade" id="pills-image" role="tabpanel" aria-labelledby="pills-image-tab">口コミ投稿画像</div>
                        <div class="tab-pane fade" id="pills-comment" role="tabpanel" aria-labelledby="pills-comment-tab">口コミ</div>
                    </div>
                </div>
        </div>
    </div>