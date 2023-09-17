<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'post_id',
    ];

    public function posts() :BelongsToMany
    {
        return $this->belongsToMany(Post::class)
            ->using(CategoryPost::class);
    }
}
