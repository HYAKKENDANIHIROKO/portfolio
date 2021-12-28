<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Shop;

class FoodieController extends Controller
{
    //フォームの名前をプロパティに持たせる
    private $formItems = ["shop_name","price","seat","menu","address","tel","opening_hours","transportation","pay","people_number","user_id"];
    //バリデーションの情報をプロパティに持たせる
    private $validator=[
           "shop_name"=>"required",
           "price"=>"required",
           //"image"=>"required",
           "seat"=>"required",
           "menu"=>"required",
           "address"=>"required",
           "tel"=>"required",
           "opening_hours"=>"required",
           "transportation"=>"required",
           "pay"=>"required",
           "people_number"=>"required",
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
        $query=Shop::query();
        //フォームから送られてきた値を取得
        $search_area=$request->input('search_area');
        //$search_areaに値があるならあいまい検索
        if (!empty($search_area)) {
           $query->where('address', 'like', '%'.$search_area.'%');
        }
        //$search_keyに値があるならあいまい検索
        $search_key=$request->input('search_key');
        if (!empty($search_key)) {
           $query->where('shop_name', 'like', '%'.$search_key.'%');
        }
        //$search_numberに値があるなら検索
        $search_number=$request->input('search_number');
        if (!empty($search_number)) {
           $query->where('people_number', '>=', $search_number);
        }
        //$search_areaと$search_keyと$search_numberに値があるなら検索
        if(!empty($search_area) && !empty($search_key) && !empty($search_unmber) ){
          $query->Where('address', 'like', '%'.$search_area.'%')->Where('shop_name', 'like', '%'.$search_key.'%')->Where('people_number', '>=',$search_unmber );  
        }
         //$search_areaと$search_keyに値があるなら検索
        if(!empty($search_area) && !empty($search_key)){
          $query->Where('address', 'like', '%'.$search_area.'%')->Where('shop_name', 'like', '%'.$search_key.'%');
        }
        //$search_areaと$search_numberに値があるなら検索
        if(!empty($search_area) && !empty($search_unmber)){
          $query->Where('address', 'like', '%'.$search_area.'%')->Where('people_number', '>=', $search_number);
        }
        //$search_keyと$search_numberに値があるなら検索
        if(!empty($search_key) && !empty($search_unmber)){
          $query->Where('shop_name', 'like', '%'.$search_key.'%')->Where('people_number', '>=', $search_number);
        }
        $shops=$query->select('id','address','shop_name','image')->get();
        return view("foodie.index",["shops"=>$shops,"search_key"=>$search_key,"search_area"=>$search_area,"search_number"=>$search_number]);  
    }
    
    public function detail($id)
    {
        $shop= Shop::find($id); 
        return view("foodie.detail",compact('shop'));
    }
    public function comment()
    {
        return view("foodie.comment");
    }
   
}
