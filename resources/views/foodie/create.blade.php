@extends('layouts.common')
@section('title', 'お店の新規登録')
 <link href="{{ asset('css/sample.css') }}" rel="stylesheet">
@section('content')
    <div class="top-wrapper "> 
        <div class="container mt-5">
            <div class="border p-5 m-3 bg-light">
                <div class="row">
                    <div class="col-md-9 mx-auto">
                        <!--お店の登録フォーム作成-->
                        <h1 class="h2 mt-2 mb-2"></h1>
                            お店の新規登録
                        <form action="{{action("FoodieController@post") }}" method="post" enctype="multipart/form-data">
                            @if (count($errors) > 0)
                                <div style="color:red;">
                                    <ul>
                                        @foreach($errors->all() as $e)
                                            <li>{{ $e }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <fieldset class="mt-3 mb-4">
                                <div class="form-group">
                                    <label for="subject">
                                        店名
                                    </label>
                                    <input name="shop_name" class="form-control" value="{{ old('shop_name') }}" placeholder="※必須" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        値段
                                    </label>
                                    <input name="price" class="form-control" value="{{ old('price') }}" placeholder="※必須" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        画像(※必須)
                                    </label>
                                    <input name="image" class="form-control-file" value="{{ old('image')}}" type="file" >
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        座席 
                                    </label>
                                    <input name="seat" class="form-control" value="{{ old('seat') }}" placeholder="※必須" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        最大予約可能人数（数値だけ入力してください）
                                    </label>
                                    <input name="people_number" class="form-control" value="{{ old('people_number') }}" placeholder="※必須" type="text">
                                </div>
                                 <div class="form-group">
                                    <label for="subject">
                                        おすすめメニュー
                                    </label>
                                    <input name="menu" class="form-control" value="{{ old('menu') }}" placeholder="※必須" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                       住所
                                    </label>
                                    <input name="address" class="form-control" value="{{ old('address') }}" placeholder="※必須" type="text">
                                </div>
                                 <div class="form-group">
                                    <label for="subject">
                                       お問い合わせ番号
                                    </label>
                                    <input name="tel" class="form-control" value="{{ old('tel') }}" placeholder="※必須" type="text">
                                </div>
                                 <div class="form-group">
                                    <label for="subject">
                                       営業時間
                                    </label>
                                    <input name="opening_hours" class="form-control" value="{{ old('opening_hours') }}" placeholder="※必須" type="text">
                                </div>
                                 <div class="form-group">
                                    <label for="subject">
                                       交通手段
                                    </label>
                                    <input name="transportation" class="form-control" value="{{ old('transportation') }}" placeholder="※必須" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                       支払い方法
                                    </label>
                                    <input name="pay" class="form-control" value="{{ old('pay') }}" placeholder="※必須" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                       ユーザー名
                                    </label>
                                    <div class="col-md-6">
                                        <input name="user_id" class="form-control" value="{{ old('user_id') }}" placeholder="※必須" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <input type="hidden" name="id" value="{{ old('id') }}">
                                        {{ csrf_field() }}
                                        <input type="submit" class="btn btn-danger" value="送信">
                                    </div>
                                    <a href="{{url('foodie')}}" style="font-weight:bold;font-size:18px;">戻る</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>       
@endsection