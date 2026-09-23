<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use Dedoc\Scramble\Scramble;

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
        if (app()->environment('production') || env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }

        if (class_exists(Scramble::class)) {
            // Allow public viewing of API documentation on cloud deployments
            Gate::define('viewApiDocs', fn ($user = null) => true);

            Scramble::configure()
                ->routes(fn ($route) => str_starts_with($route->uri(), 'api/'));
        }
    }
}
