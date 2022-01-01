<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Shop;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
     //フォームの名前をプロパティに持たせる
    private $formInfo = ["shop_id","user_id","comment_title","content","image_path1","image_path2","image_path3","relax_guidline","volume_guidline"];
    //バリデーションの情報をプロパティに持たせる
    private $validator=[
           "shop_id"=>"required",
           "user_id"=>"required",
           "comment_title"=>"required",
           "content"=>"required",
           "relax_guidline"=>"required",
           "volume_guidline"=>"required"
           ];
           
     public function add($id)
    {   
    	$shop=Shop::find($id);
    	$users=Auth::user();
    	return view("foodie.comment",compact('shop','users'));
    }
    public function comment(Request $request)
    {
    	//$forminfoに入っている口コミ投稿ページのフォームに入力した情報だけを$insertに代入
        $insert = $request->only($this->formInfo);
         $validator = Validator::make($insert, $this->validator);
         
		if($validator->fails()){
			return redirect()->action("CommentController@add",['id'=>$request->shop_id])
				->withInput()
				->withErrors($validator); 
		}
		
		$comment=new Comment;
		//image_path1に画像がある場合とない場合の処理
		if(isset($insert['image1'])){
		   $path1 = $request->file('image1')->store('public/image');
		   $comment->image_path1 = basename($path1);
		}else {
		  $comment->image_path1 = null;
		}
		//image_path2に画像がある場合とない場合の処理
		if(isset($insert['image2'])){
		   $path2 = $request->file('image2')->store('public/image');
		   $comment->image_path2 = basename($path2); 
		}else {
		    $comment->image_path2 = null; 
		}
		//image_path3に画像がある場合とない場合の処理
		if(isset($insert['image3'])){
		   $path3 = $request->file('image3')->store('public/image');
		   $comment->image_path2 = basename($path3);  
		}
		else{
		    $comment->image_path3 = null;
		}
		$comment->fill($insert);
		$comment->save();
		
	
	
        return redirect()->action("CommentController@comment");
    }
    
        public function detail($id)
    	{
        $comment= Comment::find($id); 

        return view("foodie.detail",compact('comment'));
    	}
        
       
           
}
