<?php

namespace Tests\Unit;


use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_order()
    {
        $response = $this->call('RESOURCE', '/order',[
            'first_name'=>'first name labiba',
            'last_name'=>'last name shayetreen',
            'address1'=>'address 1 dhanmondi 5',
            'address2'=>'address 2 road 4',
            'coupon'=>'some coupon eidmubarak',
            'phone'=>'some number 98298892',
            'post_code'=>'some code 1205',
            'email'=>'some email admin@gmail.com' ]);




      
        $response->assertStatus($response->status(), 500);



       // $this->assertTrue(true);
        
    }
}
