<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SearchTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_menu_found(){
        $this->visit('/')
            ->type('nasi ayam bakar', 'query')
            ->press('submit-search')
            ->see('Lihat Review')
            ->seePageIs('/search');
    }

    public function test_menu_not_found(){
        $this->visit('/')
            ->type('kodok goreng', 'query')
            ->press('submit-search')
            ->see('Tidak ditemukan menu "kodok goreng"')
            ->seePageIs('/search');
    }
}