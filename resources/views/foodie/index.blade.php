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
                                <div class=form-row> 
                                    <div class="form-group col-3">
                                        <label class="search" for="area">エリア・駅</label>
                                        <input class="form-control" type="text" name="search_area" placeholder="エリア・駅">
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="search" for="key-word">キーワード</label>
                                        <input class="form-control" type="text" name="search_key" placeholder="キーワード">
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="people" for="number">人数</label>
                                        <select class="form-control" name="number">
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
                                            <option value="15">15名</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
           