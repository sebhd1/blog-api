<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CategoryPost extends Pivot
{
    protected $fillable = [
        'post_id',
        'category_id',
    ];

    public $incrementing = true;
    public $timestamps = false;
}
