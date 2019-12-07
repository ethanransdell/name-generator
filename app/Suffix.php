<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Suffix extends Model
{
    protected $fillable = ['value'];

    public function scopeRandom(Builder $builder) {
        $builder->orderByRaw("RAND()");
    }
}
