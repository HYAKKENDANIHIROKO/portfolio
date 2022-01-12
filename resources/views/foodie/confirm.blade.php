@extends('layouts.common')
@section('title', 'お店の新規登録確認画面')
 <link href="{{ asset('css/sample.css') }}" rel="stylesheet">
@section('content')
    <div class="top-wrapper"> 
        <div class="container mt-4">
            <div class="border p-4 bg-light">
                <div class="row">
                    <div class="col-md-9 mx-auto">
                        <h1 class="h4 mb-4 font-weight-bold">
                            確認画面
                        </h1>
                        <form method="post" action="{{ route('create.send') }}">
	                        @csrf
	                        <fieldset class="mb-4">
                                <div class="form-group">
                                    <label for="subject">
                                        店名
                                    </label>
                                    {{ $input["shop_name"] }}
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        値段
                                    </label>
                                    {{ $input["price"] }}
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        画像
                                    </label>
                                    <img class="img-fluid col-md-4" src="{{($input["image"]) }}">
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        座席 
                                    </label>
                                    {{ $input["seat"] }}
                                </div>
                                 <div class="form-group">
                                    <label for="subject">
                                        メニュー
                                    </label>
                                     {{ $input["menu"] }}
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                       住所
                                    </label>
                                     {{ $input["address"] }}
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                       ユーザー名
                                    </label>
                                    <div class="col-md-6">
                                     {{ $input["user_id"] }}
                                    </div>
                                </div>
                                {{ csrf_field() }}
                                <input type="submit" class="btn btn-danger" value="登録">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>       
@endsection