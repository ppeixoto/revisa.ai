<?php

namespace App\Providers;

use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        Str::macro('onlyNumbers', function (string $str) {
            return preg_replace('/[^0-9]/', '', $str);
        });

        Builder::macro('whereLike', function (string $column, string $search) {
            return $this->where($column, (env('DB_CONNECTION') == 'pgsql' ? 'ilike' : 'like'), '%' . $search . '%');
        });

        Builder::macro('orWhereLike', function (string $column, string $search) {
            return $this->orWhere($column, (env('DB_CONNECTION') == 'pgsql' ? 'ilike' : 'like'), '%' . $search . '%');
        });

        Paginator::useBootstrapFour();
    }
}
