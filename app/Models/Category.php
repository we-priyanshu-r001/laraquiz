<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Assessment;
use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
    ];

    public $timestamps = false;

    public function assessments()
    {
        return $this->morphedByMany(Assessment::class, 'categorisable');
    }

    public function modules()
    {
        return $this->morphedByMany(Module::class, 'categorisable');
    }
}
