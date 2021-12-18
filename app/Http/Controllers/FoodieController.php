<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Shop;

class FoodieController extends Controller
{
    //フォームの名前をプロパティに持たせる
    private $formItems = ["shop_name","price","seat","menu","address","user_id"];
    //バリデーションの情報をプロパティに持たせる
    private $validator=[
           "shop_name"=>"required",
           "price"=>"required",
           //"image"=>"required",
           "seat"=>"required",
           "menu"=>"required",
           "address"=>"required",
           "user_id"=>"required"];
           
        
    //お店の登録ページを表示
    public function show()
    {
        return view("foodie.create");
    }
    public function post(Request $request)
    {
        //$formItemsに入っている、登録ページのフォームに入力した情報（shop_name,price,seat,menu,address,user_id）だけを変数$inputに代入※つまりtokenは入っていない
        $input = $request->only($this->formItems);
        $validator = Validator::make($input, $this->validator);
		if($validator->fails()){
			return redirect()->action("FoodieController@show")
				->withInput()
				->withErrors($validator); 
		}
		$path=$request->file("image")->store('public/image');
		$input['image'] = basename($path);
			//if($request->has("image")){
			    
			//}
		
		//セッションへ"form_input"というキーで入力フォームを保存
		$request->session()->put("form_input", $input);

		return redirect()->action("FoodieController@confirm");
    }
    public function confirm(Request $request)
    {
        //セッションから値を取り出す
        $input = $request->session()->get("form_input");
        //セッションに値が無い時はフォームに戻る
        if(!$input){
			return redirect()->action("FoodieController@show");
		}
		return view("foodie.confirm",["input" => $input]);
    }
    function send(Request $request){
        //セッションから値を取り出す
		$input = $request->session()->get("form_input");
		 //セッションに値が無い時はフォームに戻る
		if(!$input){
			return redirect()->action("FoodieController@show");
		}
		$shop=new Shop;
		$shop->fill($input);
		$shop->save();

        //セッションを削除し、空にする
		$request->session()->forget("form_input");

		return redirect()->action("FoodieController@complete");
	}
	
    public function complete(Request $request)
    {
      
        return view("foodie.complete");
    }
    
    public function index(Request $request)
    {
        $search_area=$request->input('search_area');
        $search_key=$request->input('search_key');
        
        if($search_area !=''){
            $shop=Shop::where('shop_name','like','%'.$searh_area.'%')->get();
        }elseif($search_key !=''){
             $shop=Shop::where('address','like','%'.$searh_key.'%')->get();
        }else{
            $shop=Shop::all();
        }
        
        return view("foodie.index");  
    }
    
    
    public function search()
    {
        return view('foodie.search');
    }
}
