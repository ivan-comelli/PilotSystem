<?php

namespace App;

class Category
{
    protected $fillable = ['name'];

    public function users() {
        return $this->hasMany('App\User');
    }
}