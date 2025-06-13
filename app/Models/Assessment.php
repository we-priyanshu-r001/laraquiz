<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
use App\Models\Question;
use App\Models\Module;
use App\Models\Comment;
use App\Traits\TimeAgoTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Assessment extends Model
{
    use HasFactory, TimeAgoTrait;

    protected $fillable = [
        'title',
        'assessment',
        'user_id',
    ];

    // protected function casts() : array
    // {
    //     return [
    //         'created_at' => 'datetime'
    //     ];
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->morphToMany(Category::class, 'categorisable');
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }

    public function modules(){
        return $this->belongsToMany(Module::class);
    }

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    protected function title() : Attribute
    {
        return Attribute::make(
            set: fn($value) => Str::title($value)
        );
    }

    // protected function created_at(): Attribute {
    //     return Attribute::make(
    //         get: fn($value) => '22',
    //     );
    // }
}
