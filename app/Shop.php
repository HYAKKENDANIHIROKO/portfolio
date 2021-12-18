<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['shop_name','price','image','seat','menu','address','user_id']; 
    
    public function comments()
    {
        return $this->hasMany('App\Comment');

    }
}
