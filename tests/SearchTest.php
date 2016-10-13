<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SearchTest extends TestCase
{
    public function testMenuFound() {
        $this->visit('/')
            ->type('nasi ayam bakar', 'query')
            ->press('submit-search')
            ->seePageIs('/search')
            ->see('Lihat Review');
    }

    public function testMenuNotFOund() {
        $this->visit('/')
            ->type('kodok goreng', 'query')
            ->press('submit-search')
            ->seePageIs('/search')
            ->see('Tidak ditemukan menu "kodok goreng"');
    }
}
