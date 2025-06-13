<?php

namespace App\Traits;

use Carbon\Carbon;

trait TimeAgoTrait {

    public function timeAgo($value)
    {
        
        // $timestamp = $timestamp ?? $this->created_at;
        
        return Carbon::parse($value)->diffForHumans();
    }
}