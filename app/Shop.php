<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['shop_name','price','image','seat','menu','address','tel','opening_hours','transportation','pay','user_id']; 
    
    public function comments()
    {
        return $this->hasMany('App\Comment');

    }
}
