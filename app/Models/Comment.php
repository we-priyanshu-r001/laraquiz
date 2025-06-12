<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'body',
        'commentable_type',
        'commentable_id'
    ];

    public function subject(){
        return $this->morphTo('commentable');
    }

    protected function body() : Attribute  
    {
        return Attribute::make(
            get: fn ($value) => Str::title($value)
        );
    }
}
