<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [
        'txn_id',
        'amount',
        'payment_status'
    ];

    public function status() {
        return $this->belongsTo(Status::class);
    }
}
