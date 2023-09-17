<?php

    namespace App\Models\Concerns;

    use Illuminate\Database\Eloquent\Relations\MorphMany;

    trait IsLikeable
    {
        public function likes() : MorphMany {
            return $this->morphMany(self::class, 'likeable');
        }

    }
