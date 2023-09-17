<?php

namespace App\Models;

use App\Models\Concerns\IsLikeable;
use App\Models\Concerns\Likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Post extends Model implements Likeable
{
    use IsLikeable;
    use HasFactory;

    protected static function boot(): void
    {
        parent::boot();

        parent::creating(
            fn (self $post) => $post->slug ??= Str::slug($post->title).'-'.uniqid(),
        );
    }

    protected $fillable = [
        'title',
        'image',
        'slug',
        'description',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function categories() : BelongsToMany
    {
        return $this->belongsToMany(Category::class)
            ->using(CategoryPost::class);
    }

    public function tags() : BelongsToMany {
        return $this->belongsToMany(Tag::class, 'tagged_posts')
            ->using(TaggedPost::class);
    }
}
