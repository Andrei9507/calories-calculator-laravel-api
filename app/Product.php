<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','kcal'];

    public function quantities()
    {
        return $this->hasMany('Quantities');
    }
}
