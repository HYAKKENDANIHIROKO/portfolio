<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['shop_id','user_id','comment_title','content','image_path1','image_path2','image_path3','relax_guidline','volume_guidline'];
    
     public function users()
    {
        return $this->belongsTo('App\User');

    }
    
     public function shops()
    {
        return $this->belongsTo('App\Comment');

    }
    

}
