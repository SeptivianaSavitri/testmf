<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    public $timestamps = false;

    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
        're-pass'
    ];

    protected $hidden = [
        're-pass'
    ];
}