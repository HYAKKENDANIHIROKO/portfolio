<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodieController extends Controller
{
    public function add()
    {
        return view('foodie.create');
    }
}
