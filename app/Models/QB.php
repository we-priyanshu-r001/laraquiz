<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class QB extends Pivot
{
    protected $table = 'assessment_module';

    protected $fillable = [
        'assessment_id',
        'module_id'
    ];

    // public function questions(){
    //     $this->hasManyThrough(Question::class, Assessment::class, )
    // }
}
