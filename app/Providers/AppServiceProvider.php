<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
use App\Contracts\Repositories\ConfigRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (env('APP_ENV') == 'local' || env('APP_ENV') == 'dev') {
            $this->app->register(\Lord\Laroute\LarouteServiceProvider::class);
            $this->app->register(\Mariuzzo\LaravelJsLocalization\LaravelJsLocalizationServiceProvider::class);
        }

        $this->composers();
    }

    public function composers()
    {
        view()->composer('backend.*', function ($view) {
            $view->with('me', \Auth::guard('backend')->user());
        });

        view()->composer('frontend.*', function ($view) {
            $view->with('configs', Cache::remember('configs', 60, function () {
                return app(ConfigRepository::class)->getData()->pluck('value', 'key');
            }));
        });
    }
}
