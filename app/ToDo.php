<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'title',
        ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
