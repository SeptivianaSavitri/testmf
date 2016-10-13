<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegistrationTest extends TestCase
{
    use DatabaseTransactions;

    public function testUserRegistration()
    {
        $this->visit('/register')
             ->type('Wiratmika', 'nama')
             ->type('wiratmika@gmail.com', 'email')
             ->type('kenasendiri', 'password')
             ->type('kenasendiri', 're-pass')
             ->press('Daftar')
             ->seePageIs('/home')
             ->seeInDatabase('users', ['email' => 'wiratmika@gmail.com']);
    }

    public function testIncompleteRegistration()
    {
        $this->visit('/register')
             ->type('rioharyanto@gmail.com', 'email')
             ->type('kenasendiri', 'password')
             ->press('Daftar')
             ->seePageIs('/register')
             ->see('The nama field is required.')
             ->see('The re-pass field is required.');
    }

    public function testBadEmailRegistration()
    {
        $this->visit('/register')
             ->type('April', 'nama')
             ->type('amazingapril.com', 'email')
             ->type('kenasendiri', 'password')
             ->type('kenasendiri', 're-pass')
             ->press('Daftar')
             ->seePageIs('/register')
             ->see('The email must be a valid email address.');
    }

    public function testWrongPasswordConfirmationRegistration()
    {
        $this->visit('/register')
             ->type('Nabilla Augustrianti', 'nama')
             ->type('nabilla@gmail.com', 'email')
             ->type('kenasendiri', 'password')
             ->type('kenasendirilhoo', 're-pass')
             ->press('Daftar')
             ->seePageIs('/register')
             ->see('The re-pass and password must match.');
    }

    public function testPasswordLengthNotEnoughRegistration()
    {
        $this->visit('/register')
             ->type('Rahmi Vitri', 'nama')
             ->type('rahmidanvitri@gmail.com', 'email')
             ->type('kena', 'password')
             ->type('kena', 're-pass')
             ->press('Daftar')
             ->seePageIs('/register')
             ->see('The password must be at least 6 characters.');
    }
}
