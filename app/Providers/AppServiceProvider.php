<?php

namespace App\Providers;

use App\Events\AssessmentCreated;
use App\Listeners\AssessmentCreatedFired;
use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(
            events: AssessmentCreated::class,
            listener: AssessmentCreatedFired::class
        );

        User::observe(UserObserver::class);

    }
}
