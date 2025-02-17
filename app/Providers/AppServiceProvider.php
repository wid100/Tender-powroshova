<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Tender;
use App\Models\Participate;

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
            // Get distinct years from Tender
            $tenderYears = Tender::selectRaw('YEAR(created_at) as year')
                ->distinct()
                ->orderBy('year', 'desc')
                ->pluck('year');

            // Get distinct years from Participate
            $participateYears = Participate::selectRaw('YEAR(created_at) as year')
                ->distinct()
                ->orderBy('year', 'desc')
                ->pluck('year');

            // Merge the two collections and remove duplicates, then order by year
            $years = $tenderYears->merge($participateYears)->unique()->sortDesc();

            $view->with('years', $years);
        });
    }
}
