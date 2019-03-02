<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'name',
        'mobile',
        'email',
        'message',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    
}
