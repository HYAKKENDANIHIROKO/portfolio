@extends('layouts.common')
@section('title', 'お店の新規登録')
 <link href="{{ asset('css/sample.css') }}" rel="stylesheet">
@section('content')
    <div class="top-wrapper "> 
        <div class="container mt-5">
            <div class="border p-5 m-3 bg-light">
                <div class="row">
                    <div class="col-md-9 mx-auto">
                        <h1 class="h2 mt-2 mb-2 font-weight-bold">
                            お店の新規登録
                        </h1>
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
                                    <input name="shop_name" class="form-control" value="{{ old('shop_name') }}" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        値段
                                    </label>
                                    <input name="price" class="form-control" value="{{ old('price') }}" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        画像
                                    </label>
                                    <input name="image" class="form-control-file" type="file" >
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        座席 
                                    </label>
                                    <input name="seat" class="form-control" value="{{ old('seat') }}" type="text">
                                </div>
                                 <div class="form-group">
                                    <label for="subject">
                                        メニュー
                                    </label>
                                    <input name="menu" class="form-control" value="{{ old('menu') }}" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                       住所
                                    </label>
                                    <input name="address" class="form-control" value="{{ old('address') }}" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                       ユーザー名
                                    </label>
                                    <div class="col-md-6">
                                        <input name="user_id" class="form-control" value="{{ old('user_id') }}" type="text">
                                    </div>
                                </div>
                                {{ csrf_field() }}
                                <input type="submit" class="btn btn-danger" value="送信">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>       
@endsection