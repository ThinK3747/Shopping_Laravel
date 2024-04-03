<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helper\Cart;
use Exception;
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
         //Chẹcked connect database
       // Paginator::useBootstrapFour();
       /* try {
            DB::connection()->getPDO();
            dump('Database is connected. Database Name is : ' . DB::connection()->getDatabaseName());
         } catch (Exception $e) {
            dump('Database connection failed');
         }*/

        Schema::defaultStringLength(191);
        Paginator::useBootstrapFive();

        view()->composer("*", function ($view) {
            $view->with([
                'cart' => new Cart()
            ]);
        });
    }
}
