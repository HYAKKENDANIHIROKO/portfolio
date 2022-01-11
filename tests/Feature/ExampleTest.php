<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Shop;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    
    public function setUp(): void
   {
        parent::setUp();

        $this->seed('ShopsTableSeeder');
   }    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
                ->assertSee('ログイン');
    }
   
    public function testDetail()
    {
        $shop = Shop::first();
        $response = $this->get('/foodie/detail/' . $shop->id); 
        $response->assertStatus(200);
    }
}
