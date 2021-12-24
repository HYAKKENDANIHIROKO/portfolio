@extends('layouts.common2')
@section('title', '口コミ投稿画面')
<link href="{{ asset('css/search.css') }}" rel="stylesheet">
@section('content')
 <div class="top-wrapper">
    <div class="container mt-2 p-3">
        <div class="border p-5 m-3 bg-light">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <!--お店の登録フォーム作成-->
                    <h1 class="h2 mt-2 mb-2">口コミの投稿</h1>
                        <form method="post" enctype="multipart/form-data">
                            <fieldset class="mb-4">
                                <div class="form-group col-md-6">
                                    <label for="subject">
                                    ユーザー名
                                    </label>
                                    <input name="user_name" id="subject" class="form-control" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="subject">
                                    お店の名前
                                    </label>
                                    <input name="shop_name" id="subject" class="form-control" type="text">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="subject">
                                    リラックス度評価
                                    </label>
                                    <select name="relax_guidline" class="form-control" id="subject">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option> 
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="subject">
                                    料理のボリューム度評価
                                    </label>
                                    <select name="volume_guidline" class="form-control" id="subject">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option> 
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-10">
                                    <label for="subject">
                                    タイトル
                                    </label>
                                    <input name="comment_title" id="subject" class="form-control" type="text">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="subject">
                                    本文
                                    </label>
                                    <textarea name="cmment_body" id="subject" class="form-control" rows="15"></textarea>
                                </div>
                                <div class="form-group col-md-10">
                                    <label for="subject">
                                    画像
                                    </label>
                                    <input name="image" id="subject" class="form-control-file" type="file">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection