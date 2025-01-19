<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Tasks;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::define('edit-task', function (User $user, Tasks $task) {
            return $task->user->is($user);
        });
    }
}
