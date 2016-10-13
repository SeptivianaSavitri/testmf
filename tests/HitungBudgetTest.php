<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HitungBudgetTest extends TestCase
{
    public function testNoValue()
    {
        $this->visit('/home')
             ->type('', 'budget')
             ->type('', 'porsi')
             ->press('submit-budget')
             ->seePageIs('/findFood')
             ->see('');
    }

    public function testZeroValue()
    {
        $this->visit('/home')
             ->type('0', 'budget')
             ->type('0', 'porsi')
             ->press('submit-budget')
             ->seePageIs('/findFood')
             ->see('');   
    }

    public function testNegativeValue()
    {
         $this->visit('/home')
             ->type('-10000', 'budget')
             ->type('1', 'porsi')
             ->press('submit-budget')
             ->seePageIs('/findFood')
             ->see('');   
    }

    public function test_string_value()
    {
        $this->visit('/home')
             ->type('nyem', 'budget')
             ->type('nyem', 'porsi')
             ->press('submit-budget')
             ->seePageIs('/findFood')
             ->see('');   
    }

    public function testSucceedFind()
    {

          $this->visit('/home')
             ->type('1000', 'budget')
             ->type('1', 'porsi')
             ->press('submit-budget')
             ->seePageIs('/findFood')
             ->see('Nasie Goreng Tempo Doeloe');   
    }

}
