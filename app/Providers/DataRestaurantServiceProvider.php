<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DataRestaurantServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // get all data from dishes.json file
        $dishesJson = file_get_contents(base_path('resources/data/dishes.json'));
        $dishesJson = json_decode($dishesJson);
        // Chia sẻ dữ liệu với tất cả các controller thông qua IoC Container
        $this->app->singleton('dishesJson', function ($app) use ($dishesJson) {
            return $dishesJson;
        });
    }
}
