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
                                <h3 class="shop_name pt-1 mb-1 col-md-7">{{$shop->shop_name}}</h3>
                                <div class="col-md-5  d-flex p-3 justify-content-end"><a href="{{url('foodie/comment',['id'=>$shop->id])}}" class="btn btn-success" role="button">口コミ投稿</a></div>
                                <p class="price col-md-5">{{$shop->price}}</p>
                            </div>
                            <div class="form-group row">
                                <p class="relax-avg_score col-md-5 d-flex p-3">リラックス度</p>
                                <p class="volume-avg_score col-md-5 d-flex p-3">料理のボリューム度</p>
                            </div>
                            <div class="form-group row">
                               <a href="#" class="col-md-5" style="font-size:18px" onClick="history.back()">戻る</a> 
                            </div>
                        </div>    
                    </div>
                </div>
           
            <!--ナビゲーションタブの実装-->
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
                    <div class="tab-content" id="pills-tabContent col-md-12">
                        <div class="tab-pane fade show active mb-3" id="pills-top" role="tabpanel" aria-labelledby="pills-top-tab">
                            <div class="d-flex flex-row bd-highlight col-md-12 m-3">
                                <img src="{{secure_asset('storage/image/'.$shop->image) }}" class="img-fluid float-md-left pr-3 col-md-4">
                            </div>
                            <table class="table table-bordered p-3">
                                <h3 class="mt-5">基本情報</h3>
                                <tbody>
                                    <tr>
                                        <th class="table_headline">店名</th>
                                        <td class="shop_info">
                                            <sapn>{{$shop->shop_name}}</sapn>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table_headline">予算</th>
                                        <td classs="shop_info">
                                            <span>{{$shop->price}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table_headline">住所</th>
                                        <td class="shop_info">
                                            <sapn>{{$shop->address}}</sapn>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table_headline">座席</th>
                                        <td class="shop_info">
                                            <sapn>{{$shop->seat}}</sapn>
                                        </td>
                                    </tr>
                                     <tr>
                                        <th class="table_headline">最大予約可能人数</th>
                                        <td class="shop_info">
                                            <sapn>{{$shop->people_number}}名</sapn>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table_headline">メニュー</th>
                                        <td class="shop_info">
                                            <sapn>{{$shop->menu}}</sapn>
                                        </td>
                                    </tr>
                                     <tr>
                                        <th class="table_headline">お問い合わせ番号</th>
                                        <td class="shop_info">
                                            <sapn>{{$shop->tel}}</sapn>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table_headline">営業時間</th>
                                        <td class="shop_info">
                                            <sapn>{{$shop->opening_hours}}</sapn></sapn>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table_headline">交通手段</th>
                                        <td class="shop_info">
                                            <sapn>{{$shop->transportation}}</sapn>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table_headline">支払い方法</th>
                                        <td class="shop_info">
                                            <sapn>{{$shop->pay}}</sapn>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade m-4" id="pills-menu" role="tabpanel" aria-labelledby="pills-menu-tab">ユーザーのおすすめメニュー
                            <div class="restoaurant-menu mt-3">
                                <div class="restoaurant-menu_list">
                                    <ul class="menu-contetns">
                                        <li class="menu-list">{{$shop->menu}}</li>
                                    </ul>
                                </div>   
                            </div>   
                        </div>
                        <div class="tab-pane fade m-3" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">住所
                         <table class="table table-bordered p-3">
                                <tbody>
                                    <tr>
                                        <th class="table_headline">住所</th>
                                        <td class="shop_info">
                                            <sapn>{{$shop->address}}</sapn>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table_headline">交通手段</th>
                                        <td class="shop_info">
                                            <sapn>{{$shop->transportation}}<</sapn>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pills-image" role="tabpanel" aria-labelledby="pills-image-tab">口コミ投稿画像
                            <div class="d-flex flex-row bd-highlight col-md-7 m-3">
                                <img src="../images/IMG_2207.jpg" class="img-fluid float-left pr-3">
                                <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                                <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                            </div>    
                            <div class="d-flex flex-row bd-highlight col-md-7 m-3">
                                <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                                <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                                <img src="../images/IMG_2207.jpg" class="img-fluid float-left pr-3">
                            </div>
                            <div class="d-flex flex-row bd-highlight col-md-7 m-3">
                                <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                                <img src="../images/cake.jpg" class="img-fluid float-left pr-3">
                                <img src="../images/IMG_2207.jpg" class="img-fluid float-left pr-3">
                            </div>
                        </div>
                        <div class="tab-pane fade m-4" id="pills-comment" role="tabpanel" aria-labelledby="pills-comment-tab">口コミ一覧
                            <div class="restoaurant-detail_report_list mt-3">
                               @if($shop->comments !=null) 
                                    @foreach($shop->comments as $comment)
                                <div class="restoaurant_report_list border-bottom border-dark border-right-0">
                                    <article class="restoaurant_report">
                                        <div class="restoaurant_reporter">{{Auth::user()->name}}
                                            <div class="restoaurant_reporter">{{$comment->comment_title}}
                                                <div class="restaurant_report_score">リラックス度:  {{$comment->relax_guidline}}, 料理のボリューム度: {{$comment->volume_guidline}}
                                                </div>
                                            </div>
                                        </div>
                                        <p class="restoaurant_report-text mt-4">{{$comment->content}}</p>
                                            <figure class="restaurant_report_images">
                                                <div class="d-flex flex-row col-md-12 m-3">
                                                    @if($comment->image_path1 !=null)
                                                        <div class="col-md-4" style="text-align:right"><img src="{{secure_asset('storage/image/'. $comment->image_path1) }}" class="img-fluid"></div>
                                                    @endif
                                                    @if($comment->image_path2 !=null)
                                                        <div class="col-md-4" style="text-align:right"><img src="{{secure_asset('storage/image/'. $comment->image_path2) }}" class="img-fluid"></div>
                                                    @endif
                                                    @if($comment->image_path3 !=null)
                                                        <div class="col-md-4" style="text-align:right"><img src="{{secure_asset('storage/image/'. $comment->image_path3) }}" class="img-fluid"></div>
                                                    @endif
                                                </div>
                                            </figure>
                                    </article>
                                </div>  
                                    @endforeach
                                @endif
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection