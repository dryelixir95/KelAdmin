<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class insertBarang extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_insert_barang(){
        $this->visit('/barangs/add');

        $this->submitForm('Submit Form',[
            'nama'=>'mboo opo',
            'harga'=>'5000',
            'jumlah'=>'3'
        ]);

        $this->seeInDatabase('barangs',[
            'nama'=>'mboo opo'
        ]);
        
        $this->seePageIs('/barangs/view');

        $this->see('mboo opo');
    }
}
