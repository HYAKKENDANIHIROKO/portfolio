<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['shop_id','user_id','comment_title','content','image_path','relax_guidline','volume_guidline'];
}
