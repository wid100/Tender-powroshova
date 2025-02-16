<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Tender;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    // In app/Providers/AppServiceProvider.php or a custom provider
    public function boot()
    {
        view()->composer('layouts.backend.sidebar', function ($view) {
            $years = Tender::selectRaw('YEAR(created_at) as year')
                ->distinct()
                ->orderBy('year', 'desc')
                ->pluck('year');

            $view->with('years', $years);
        });
    }
}
