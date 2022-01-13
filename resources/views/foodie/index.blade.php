@extends('layouts.common')
@section('title', 'お店の検索と一覧画面')
<link href="{{ asset('css/search.css') }}" rel="stylesheet">
@section('content')
    <div class="top-wrapper"> 
        <div class="jumbotron jumbotron-extend" style="maragin:90px 0">
            <div class="container">
               
                    <!--検索画面の実装-->
                    <form action="{{ action('FoodieController@index') }}" method="get" class="card mx-auto" style="width:70rem;">
                        <div class="card-body">
                            <div class=form-row> 
                                <div class="form-group col-4">
                                    <label class="search" for="area">エリア・駅</label>
                                    <input class="form-control" type="text" name="search_area" value="{{$search_area}}" placeholder="エリア・駅">
                                </div>
                                <div class="form-group col-4">
                                    <label class="search" for="key-word">キーワード</label>
                                    <input class="form-control" type="text" name="search_key" value="{{$search_key}}" placeholder="キーワード">
                                </div>
                                <div class="form-group col-4">
                                    <label class="search" for="people_number">人数</label>
                                    <select class="form-control" name="search_number">
                                        @for ($i = 1; $i <= 15; $i++)
                                            <option value="{{ $i }}" @if(old('search_number', $search_number) == $i) selected @endif>{{ $i }}名以上</option>
                                        @endfor
                                    </select>
                                </div>
                               
                            </div>
                            <div class="form-row">
                                <input class="mx-auto col-md-2 btn btn-danger" type="submit" name="submit" value="検索"> 
                            </div>
                        </div>
                    </form>
                    <!--お店の一覧画面の実装-->
                    <div class="row">
                        <div class="col-md-12">
                            <h5>※各お店の詳細画面にはお店のリラックス度と料理のボリューム度に関する評価の平均値が入ります。</h5>
                        </div>    
                        <div class="col-md-6">
                            <p class="relax_guidline mr-2" style="font-size:25px;">リラックス度：<span class="fa-solid fa-face-frown blue-face fa-lg mr-1"></span>1
                            <span class="fa-solid fa-face-frown-open green-face fa-lg mr-1"></span>2<span class="fa-solid fa-face-grin yellow-face fa-lg mr-1"></span>3
                            <span class="fa-solid fa-face-grin-beam orange-face fa-lg mr-1"></span>4<span class="fa-solid fa-face-grin-squint red-face fa-lg mr-1"></span>5</p>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <p class="volume_guidline mr-2" style="font-size:25px;">料理のボリューム度：<span class="far fa-frown b-face fa-lg mr-1"></span>1
                            <span class="far fa-frown-open g-face fa-lg mr-1"></span>2<span class="far fa-grin y-face fa-lg mr-1"></span>3
                            <span class="far fa-grin-beam o-face fa-lg mr-1"></span>4<span class="far fa-grin-squint r-face fa-lg mr-1"></span>5</p>
                        </div>
                        <div class="w-100"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <p class="shop_list mt-3">お店の一覧</p>
                        </div>
                        <div class="col-md-5" style="text-align:right;">
                            <a href="{{ action('FoodieController@show') }}" role="button" class="btn btn-success mt-3" style="font-size:19px;">お店の新規投稿はこちら</a>
                        </div>
                        <div class="w-100"></div>
                    </div>
                    <div class="row ">
                        @foreach($shops as $shop)
                            <div class="col-md-5 place border-bottom border-dark border-right-0"><img class="img-fluid" src="{{'https://techboost9.s3.ap-northeast-1.amazonaws.com/' . $shop->image }}"></div>
                            <div class="col-md-7 border-bottom border-dark">
                                    <a href= "{{ route('foodie.detail', ['id'=>$shop->id]) }}" class="shop_name col-md-5">{{$shop->shop_name}}</a> 
                                    <p class="price">{{$shop->price}}</p>
                                    <p class="address">{{$shop->address}}</p>
                            </div>
                        @endforeach  
                    </div>  
                       
            </div>
        </div>   
    </div> 
 @endsection
   
    
   

        
           