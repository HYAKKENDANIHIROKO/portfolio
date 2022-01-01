<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['shop_name','price','image','seat','menu','address','tel','opening_hours','transportation','pay','people_number','user_id']; 
    
    public function comments()
    {
        return $this->hasMany('App\Comment');

    }
    
    public function users()
    {
        return $this->hasMany('App\User');

    }
}
