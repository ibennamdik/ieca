<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    //
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'message'
    ];

    public function user() {

        return $this->belongsTo(User::class);
    }
}
