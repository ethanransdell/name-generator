<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Prefix extends Model
{
    protected $fillable = ['value'];

    public function scopeRandom(Builder $builder) {
        $builder->orderByRaw("RAND()");
    }
}
