<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Assessment;
use App\Models\QB;
use App\Models\Question;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title'
    ];

    public function assessments()
    {
        return $this->belongsToMany(Assessment::class);
    }

    public function questions()
    {
        return $this->hasManyThrough(Question::class, QB::class, 'assessment_id', 'id', 'id', 'module_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

}
