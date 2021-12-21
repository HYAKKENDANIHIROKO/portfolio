@extends('layouts.common')
@section('title', 'お店の検索と一覧画面')
<link href="{{ asset('css/search.css') }}" rel="stylesheet">
@section('content')
    <div class="top-wrapper"> 
        <div class="jumbotron jumbotron-extend" style="maragin:90px 0">
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <!--検索画面の実装-->
                    <form action="{{ action('FoodieController@index') }}" method="get" class="card mx-auto" style="width:70rem;">
                        <div class="card-body">
                            <div class=form-row> 
                                <div class="form-group col-3">
                                    <label class="search" for="area">エリア・駅</label>
                                    <input class="form-control" type="text" name="search_area" value="{{$search_area}}" placeholder="エリア・駅">
                                </div>
                                <div class="form-group col-3">
                                    <label class="search" for="key-word">キーワード</label>
                                    <input class="form-control" type="text" name="search_key" value="{{$search_key}}" placeholder="キーワード">
                                </div>
                                <div class="form-group col-3">
                                    <label class="people" for="number">人数</label>
                                    <select class="form-control" name="person">
                                        <option value="1">1名</option>
                                        <option value="2">2名</option>
                                        <option value="3">3名</option>
                                        <option value="4">4名</option>
                                        <option value="5">5名</option>
                                        <option value="6">6名</option>
                                        <option value="7">7名</option>
                                        <option value="8">8名</option>
                                        <option value="9">9名</option>
                                        <option value="10">10名</option>
                                        <option value="11">11名</option>
                                        <option value="12">12名</option>
                                        <option value="13">13名</option>
                                        <option value="14">14名</option>
                                        <option value="15">15名以上</option>
                                    </select>
                                </div>
                                <div class="form-group col-3">
                                    <label class="guideline" for="relax">リラックス度</label>
                                    <select class="form-control" name="relax">
                                        <option value="guideline1">1</option>  
                                        <option value="guideline2">2</option> 
                                        <option value="guideline3">3</option> 
                                        <option value="guideline4">4</option>  
                                        <option value="guideline5">5</option>  
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
                        <p class="shop_list mx-auto">お店の一覧</p>
                        <div class="w-100"></div>
                    <div class="row ">
                        @foreach($posts as $shop)
                            <div class="col-md-5 place border-bottom border-dark border-right-0"><img class="img-fluid" src="{{secure_asset('storage/image/'.$shop->image) }}"></div>
                            <div class="col-md-7 border-bottom border-dark">
                                    <a href= '' class="shop_name col-md-5">{{$shop->shop_name}}</a> 
                                    <p class="price">{{$shop->price}}</p>
                                    <p class="address">{{$shop->address}}</p>
                            </div>
                        @endforeach  
                    </div>  
                </div>        
            </div>
        </div>   
    </div>   
   
    
   

        
           