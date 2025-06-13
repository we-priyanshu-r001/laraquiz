<?php

namespace App\Listeners;

use App\Events\AssessmentCreated;
use App\Models\Assessment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Models\AssessmentActivity;

class AssessmentCreatedFired
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AssessmentCreated $event): void
    {
        // $assessment = $event->assessment->implode(' ');

        // dd('hi');

        $assessment = $event->assessment->toArray();

        // dd(json_encode($assessment));

        AssessmentActivity::create([
            'activity' => json_encode($assessment),
        ]);
    }
}
