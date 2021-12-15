@extends('layouts.common')
@section('title', 'お店の検索と一覧画面')
<link href="{{ asset('css/search.css') }}" rel="stylesheet">
@section('content')
    <div class="top-wrapper"> 
        <div class="jumbotron jumbotron-extend" style="maragin:90px 0">
            <div class="container">
                <div class="row justify-content-center mt-5">
                        <form class="card mx-auto" style="width:50rem;">
                            <div class="card-body">
                                <div class=form-group row> 
                                    <label class="col-md-2">エリア・駅</label>
                                    <div class="col-md-4">
                                    <input class="form-control" type="text" name="search_area" placeholder="エリア・駅">
                                    <label class="col-md-6">キーワード</label>
                                    <div class="col-md-4">
                                    <input class="form-control" type="text" name="search_key" placeholder="キーワード">
                                 </div>
                            </div>
                        </form>
            
            
            
            
            
            
            </div>
        </div>
    </div>    
           