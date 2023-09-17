<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TaggedPost extends Pivot
{
    protected $fillable = [
        'post_id',
        'tag_id',
    ];

    public $incrementing = true;
    public $timestamps = false;
}
