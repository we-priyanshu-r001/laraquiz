<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Assessment;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'options',
        'assessment_id'
    ];

    public $timestamps = false;

    public function assessment() {
        return $this->belongsTo(Assessment::class);
    }
}
