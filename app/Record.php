<?php

namespace App;


class Record extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
}