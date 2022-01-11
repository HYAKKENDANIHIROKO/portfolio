<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Shop;
use App\Comment;

class FoodieControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
     
     
    public function testBasicTest()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
        
        $response = $this->get('/register');
        $response->assertStatus(200);
        
        $response = $this->get('/foodie');
        $response->assertStatus(200);
        
       
    }
    //ログインした状態で"FoodieControllerのshowアクションメソッドが実行されるか"
    public function testApplication()
    {
        //ユーザーの認証状態を指定
        $user = factory(User::class)->create();
        //ユーザーをログイン状態にする
        $this->actingAs($user);
        $response = $this->get(action('FoodieController@show'));
        $response->assertStatus(200);
    }
    //ログインしていない状態でお店の投稿画面に行こうとするとログイン画面に戻されるか
     public function testShow()
     {
        $response = $this->get(action('FoodieController@show'));
        $response->assertRedirect(route('login'));
     }
    //お店の詳細画面を表示できるか
    //public function testDetail()
     //{
        // $response = $this->get('/foodie/detail/{id}'); 
        // $response->assertStatus(200);
    // }
}
