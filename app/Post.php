<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    //
    protected $fillable = [
        'topic',
        'author',
        'post_category_id',
        'image1',
        'body'
    ];

    public function postCategory() {
        return $this->belongsTo(PostCategory::class);
    }

    public function postComments() {
        return $this->hasMany(PostComment::class);
    }
}
