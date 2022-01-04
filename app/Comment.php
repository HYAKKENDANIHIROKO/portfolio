<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = array('id');
       public static $rules = array(
        'shop_id'=> 'required',
        'user_id'=> 'required',
        'comment_title'=>'required',
        'content'=> 'required',
        'relax_guidline'=> 'required',
       'volume_guidline'=>'required',
       
    );
    
     public function user()
    {
        return $this->belongsTo('App\User');
    }
    
     public function shop()
    {
        return $this->belongsTo('App\Shop');
    }
}
