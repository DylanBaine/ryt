<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapVenueRoutes();

        $this->mapPromoterRoutes();

        $this->mapBandRoutes();

        //
    }

    /**
     * Define the "band" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapBandRoutes()
    {
        Route::group([
            'middleware' => ['web', 'band', 'auth:band'],
            'prefix' => 'band',
            'as' => 'band.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/band.php');
        });
    }

    /**
     * Define the "promoter" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapPromoterRoutes()
    {
        Route::group([
            'middleware' => ['web', 'promoter', 'auth:promoter'],
            'prefix' => 'promoter',
            'as' => 'promoter.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/promoter.php');
        });
    }

    /**
     * Define the "venue" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapVenueRoutes()
    {
        Route::group([
            'middleware' => ['web', 'venue', 'auth:venue'],
            'prefix' => 'venue',
            'as' => 'venue.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/venue.php');
        });
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
