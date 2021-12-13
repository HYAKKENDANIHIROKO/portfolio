@extends('layouts.common')
@section('title', '送信完了')
 <link href="{{ asset('css/sample.css') }}" rel="stylesheet">
@section('content')
     <div class="top-wrapper"> 
        <div class="container mt-4">
            <div class="border p-4 bg-light">
                <div class="row">
                    <div class="col-md-9 mx-auto">
                        <h1 class="h4 mb-4 font-weight-bold">
                            送信完了！
                        </h1>
                        <a href="{{ route("create.show") }}">戻る</a>
                        <fieldset class="mb-4">
                            <div class="form-group">
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection