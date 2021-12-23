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
            <!--ナビゲーションタブの実装-->
            <div class="row">
                    <ul class="nav nav-pills mb-5 nav-fill col-md-12" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-top-tab" data-toggle="pill" href="#pills-top" role="tab" aria-controls="pills-top" aria-selected="true">トップ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-menu-tab" data-toggle="pill" href="#pills-menu" role="tab" aria-controls="pills-menu" aria-selected="false">おすすめメニュー</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map" aria-selected="false">地図</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-image-tab " data-toggle="pill" href="#pills-image" role="tab" aria-controls="pills-image" aria-selected="false">画像</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-comment-tab " data-toggle="pill" href="#pills-comment" role="tab" aria-controls="pills-comment" aria-selected="false">口コミ</a>
                        </li>
                    </ul>
                    <!--トップ-->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active mb-3" id="pills-top" role="tabpanel" aria-labelledby="pills-top-tab">
                            <div class="d-flex flex-row bd-highlight col-md-5 m-3">
                                <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                                <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                                <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                            </div>    
                            <div class="d-flex flex-row bd-highlight col-md-5 m-3">
                                <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                                <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                                <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                            </div>
                            <table class="table table-bordered p-3">
                                <h3 class="mt-5">基本情報</h3>
                                <tbody>
                                    <tr>
                                        <th class="table_headline">店名</th>
                                        <td class="shop_info">
                                            <sapn>お店の名前</sapn>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table_headline">予算</th>
                                        <td classs="shop_info">
                                            <span>（例）1000円～2000円</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table_headline">住所</th>
                                        <td class="shop_info">
                                            <sapn>郵便番号・住所・アクセス情報が入ります</sapn>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table_headline">座席</th>
                                        <td class="shop_info">
                                            <sapn>席数。カウンター席〇席、テーブル席〇席</sapn>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table_headline">メニュー</th>
                                        <td class="shop_info">
                                            <sapn>料理：料理の種類　ドリンク：ドリンクの種類</sapn>
                                        </td>
                                    </tr>
                                     <tr>
                                        <th class="table_headline">お問い合わせ番号</th>
                                        <td class="shop_info">
                                            <sapn>000</sapn>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table_headline">営業時間</th>
                                        <td class="shop_info">
                                            <sapn>何時～何時</sapn>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table_headline">交通手段</th>
                                        <td class="shop_info">
                                            <sapn>〇〇線　△改札口～徒歩何分</sapn>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table_headline">支払い方法</th>
                                        <td class="shop_info">
                                            <sapn>現金。クレカ</sapn>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade m-4" id="pills-menu" role="tabpanel" aria-labelledby="pills-menu-tab">ユーザーのおすすめメニュー
                            <div class="restoaurant-menu mt-3">
                                <div class="restoaurant-menu_list">
                                    <ul class="menu-contetns">
                                        <li class="menu-list">メニューの中身と値段</li>
                                         <li class="menu-list">メニューの中身と値段</li>
                                    </ul>
                                    
                                </div>   
                            </div>   
                        </div>
                        <div class="tab-pane fade m-3" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">住所
                         <table class="table table-bordered p-3">
                                <tbody>
                                    <tr>
                                        <th class="table_headline">お店の住所</th>
                                        <td class="shop_info">
                                            <sapn>郵便番号。住所</sapn>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table_headline">交通手段</th>
                                        <td class="shop_info">
                                            <sapn>〇〇線　△改札口～徒歩何分<</sapn>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pills-image" role="tabpanel" aria-labelledby="pills-image-tab">口コミ投稿画像
                            <div class="d-flex flex-row bd-highlight col-md-5 m-3">
                                <img src="../images/IMG_2207.jpg" class="img-fluid float-left pr-3">
                                <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                                <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                            </div>    
                            <div class="d-flex flex-row bd-highlight col-md-5 m-3">
                                <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                                <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                                <img src="../images/IMG_2207.jpg" class="img-fluid float-left pr-3">
                            </div>
                            <div class="d-flex flex-row bd-highlight col-md-5 m-3">
                                <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                                <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                                <img src="../images/IMG_2207.jpg" class="img-fluid float-left pr-3">
                            </div>
                        </div>
                        <div class="tab-pane fade m-4" id="pills-comment" role="tabpanel" aria-labelledby="pills-comment-tab">口コミ一覧
                            <div class="restoaurant-detail_report_list mt-3">
                                <div class="restoaurant_report_list border-bottom border-dark border-right-0">
                                    <article class="restoaurant_report">
                                        <div class="restoaurant_reporter">ユーザー名
                                            <div class="restaurant_report_score">
                                            </div>
                                        </div>
                                        <p class="restoaurant_report-text">お店の感想が入ります。お店の感想が入ります。お店の感想が入ります。お店の感想が入ります。お店の感想が入ります。</p>
                                            <figure class="restaurant_report_images">
                                                <div class="d-flex flex-row bd-highlight col-md-5 m-3">
                                                    <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                                 
                                                    <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                                                    <img src="../images/IMG_2207.jpg" class="img-fluid float-left pr-3">
                                                </div>
                                            </figure>
                                    </article>
                                </div>    
                            </div>  
                        </div>
                    </div>
                </div>
        </div>
    </div>