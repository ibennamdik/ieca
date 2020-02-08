<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    protected $fillable = [
        'name', 'style',
    ];

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }

    public function order() {
        return $this->hasMany(Order::class);
    }

    public function payment() {
        return $this->hasMany(Payment::class);
    }

    public function profile() {
        return $this->hasMany(Profile::class);
    }

}
