<?php

namespace App\Models;

use App\Models\Concerns\IsLikeable;
use App\Models\Concerns\Likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comment extends Model implements Likeable
{
    use IsLikeable;
    use HasFactory;

    protected $fillable = [
        'content',
        'post_id',
        'user_id',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function post(): HasOne
    {
        return $this->hasOne(Post::class);
    }
}
