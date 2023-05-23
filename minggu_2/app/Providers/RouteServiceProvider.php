<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    /**
 * Define your route model bindings, pattern filters, etc.
 */
//Jika kita ingin route parameter 
//selalu dibatasi oleh reguler expression tertentu, Kita dapat
//menggunakan metode pattern
public function boot(): void
{
    $this->configureRateLimiting();

    $this->routes(function(){
        Route::middleware('api')->prefix('api')->group(base_path('routes/api.php'));
        Route::middleware('web')->group(base_path('routes/web.php'));
    });
    // Route::pattern('id', '[0-9]+');
    //Setelah pola ditentukan, secara otomatis 
    //akan diterapkan ke semua route menggunakan nama parameter itu

    // Route::get('/user/{id}', function (string $id) {
    //     // Only executed if {id} is numeric...
    // });
}

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
