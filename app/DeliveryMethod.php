<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryMethod extends Model
{
    //
    protected $fillable = ['name', 'cost', 'image'];

    public function order() {
        return $this->hasMany(Order::class);
    }
}
