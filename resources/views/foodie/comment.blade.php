@extends('layouts.common2')
@section('title', '口コミ投稿画面')
<link href="{{ asset('css/search.css') }}" rel="stylesheet">
@section('content')
 <div class="top-wrapper">
    <div class="container mt-2 p-3">
        <div class="border p-5 m-3 bg-light">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <h1 class="h2 mt-2 mb-5">口コミの投稿</h1>
                        <form action="{{action('CommentController@comment')}}" method="post" enctype="multipart/form-data">
                            @if (count($errors) > 0)
                                    <ul>
                                @foreach($errors->all() as $e)
                                        <li>{{ $e }}</li>
                                @endforeach
                                    </ul>
                            @endif
                            <fieldset class="mb-4">
                                <div class="form-group col-md-6">
                                    <h4>
                                    ユーザー名: {{Auth::user()->name}} ユーザーID: {{Auth::id()}}
                                    </h4>
                                </div>
                                <div class="form-group col-md-6">
                                    <h4 class="mb-5">
                                    お店の名前: {{$shop->shop_name}}
                                    </h4>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="subject">
                                    リラックス度評価
                                    </label>
                                    <select name="relax_guidline" class="form-control" id="subject">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <option value="{{ $i }}" @if(old('relax_guidline') == $i) selected @endif>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="subject">
                                    料理のボリューム度評価
                                    </label>
                                    <select name="volume_guidline" class="form-control" id="subject">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <option value="{{ $i }}" @if(old('volume_guidline') == $i) selected @endif>{{ $i }}</option>
                                        @endfor   
                                    </select>
                                </div>
                                <div class="form-group col-md-10">
                                    <label for="subject">
                                    タイトル
                                    </label>
                                    <input name="comment_title" id="subject" class="form-control" value="{{old('comment_title')}}" type="text">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="subject">
                                    本文
                                    </label>
                                    <textarea name="content" id="subject" class="form-control" value="{{old('content')}}" rows="15"></textarea>
                                </div>
                                <div class="form-group col-md-10">
                                    <label for="subject">
                                    画像
                                    </label>
                                    <input name="image1" id="subject" class="form-control-file" type="file">
                                </div>
                                <div class="form-group col-md-10">
                                    <label for="subject">
                                    画像
                                    </label>
                                    <input name="image2" id="subject" class="form-control-file" type="file">
                                </div>
                                <div class="form-group col-md-10">
                                    <label for="subject">
                                    画像
                                    </label>
                                    <input name="image3" id="subject" class="form-control-file" type="file">
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <input name="shop_id" value="{{$shop->id}}" type="hidden">
                                        <input name="user_id" value="{{Auth::id()}}" type="hidden">
                                        <input name="submit_at" value="{{old('submit_at')}}" type="hidden">{{\Carbon\Carbon::now()->format("Y/m/d")}}
                                    </div>
                                </div>
                                {{ csrf_field() }}
                                <div class="col-md-2 mb-4">
                                    <input type="submit" class="btn btn-danger" value="送信">
                                </div>
                                <div class="col-md-9">
                                    <a href='{{url('foodie/detail',['id'=>$shop->id])}}'style="font-weight:bold;">戻る</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection