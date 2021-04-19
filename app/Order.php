<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['user_id', 'status_id','payment_id', 'delivery_method_id', 'comment'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function payment() {
        return $this->belongsTo(Payment::class);
    }

    public function orderItems() {
        return $this->hasMany(OrderItem::class);
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }

    public function delivery_method() {
        return $this->belongsTo(DeliveryMethod::class);
    }

    public function product() {
        return $this->hasManyThrough(OrderItem::class, Product::class);
    }
}
