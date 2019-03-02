<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'name',
        'number',
        'message',
        'is_approved',
        ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
