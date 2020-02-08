<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    //

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'category_id',
        'brand_id',
        'description',
        'rating',
        'image1',
        'image2',
        'quantity',
        'amount',
        'width_id',
        'tyre_profile_id',
        'rim_id',
        'visibility',
        'orders_count',

        //extra for ieca
        'size'
    ];

    public function category() {

        return $this->belongsTo(Category::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function width() {
        return $this->belongsTo(Width::class);
    }

    public function rim() {
        return $this->belongsTo(Rim::class);
    }

    public function orderItem() {
        return $this->hasOne(OrderItem::class);
    }

    public function tyreProfile() {
        return $this->belongsTo(TyreProfile::class);
    }
}
