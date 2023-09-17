<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'post_id',
    ];

    public function posts() : BelongsToMany {
        return $this->belongsToMany(Post::class, 'tagged_posts')
            ->using(TaggedPost::class);
    }
}
