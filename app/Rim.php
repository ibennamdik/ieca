<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rim extends Model
{
    //
    protected $fillable = ['name'];

    public function products() {
        return $this->hasMany(Product::class);
    }
}
