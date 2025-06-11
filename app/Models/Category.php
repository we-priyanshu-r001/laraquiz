<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Assessment;


class Category extends Model
{
    protected $fillable = [
        'title',
    ];

    public $timestamps = false;

    public function assessments()
    {
        return $this->belongsToMany(Assessment::class, 'assessment_category');
    }
}
