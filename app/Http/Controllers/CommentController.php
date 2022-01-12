<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Shop;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Storage;

class CommentController extends Controller
{
     //フォームの名前をプロパティに持たせる(bladeのフォーム部分にあるnameのところの名前と一緒)
    private $formInfo = ["shop_id","user_id","comment_title","content","image1","image2","image3","relax_guidline","volume_guidline","submit_at"];
    
   
           
     public function add($id)
    {  
    
    	$shop=Shop::find($id);
    	$user=Auth::user();
    	return view("foodie.comment",compact('shop','user'));
    }
    public function comment(Request $request)
    {
    	//dd($request);
    	//$forminfoに入っている口コミ投稿ページのフォームに入力した情報だけを$insertに代入
        $insert = $request->only($this->formInfo);
        $this->validate($request, Comment::$rules);
		
		$comment=new Comment;
		//dd($insert);
		//image_path1に画像がある場合とない場合の処理
		if(isset($insert['image1'])){
		   $path1 = Storage::disk('s3')->putFile('/',$insert['image1'],'public');
           $comment->image_path1 = Storage::disk('s3')->url($path1);
		}else {
		  $comment->image_path1 = null;
		}
		//image_path2に画像がある場合とない場合の処理
		if(isset($insert['image2'])){
			$path2 = Storage::disk('s3')->putFile('/',$insert['image2'],'public');
        	$comment->image_path2 = Storage::disk('s3')->url($path2);
		}else {
		    $comment->image_path2 = null; 
		}
		//image_path3に画像がある場合とない場合の処理
		if(isset($insert['image3'])){
		   $path3 = Storage::disk('s3')->putFile('/',$insert['image1'],'public');
           $comment->image_path3 = Storage::disk('s3')->url($path3);
		}
		else{
		    $comment->image_path3 = null;
		}
		unset($insert['image1']);
		unset($insert['image2']);
		unset($insert['image3']);
		
		$comment->fill($insert);
		$comment->submit_at=Carbon::now()->format("Y/m/d");	
		$comment->save();
		
	
        return redirect()->action("CommentController@add",['id'=>$request->shop_id,'comment'=>$comment]);
    }
    
        
        
       
           
}
