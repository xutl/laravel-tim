<?php

namespace XuTL\Tim;

use Illuminate\Support\ServiceProvider;

class TimServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $source = realpath($raw = __DIR__ . '/../config/tim.php') ?: $raw;
        if ($this->app->runningInConsole()) {
            $this->publishes([
                $source => config_path('tim.php'),
            ], 'tim-config');
        }
        $this->mergeConfigFrom($source, 'tim');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerLaravelBindings();
    }

    /**
     * Register Laravel bindings.
     *
     * @return void
     */
    protected function registerLaravelBindings()
    {
        $this->app->singleton(\XuTL\QCloud\Tim\Tim::class, function ($app) {
            return new \XuTL\QCloud\Tim\Tim(
                $app['config']['tim']['app_id'],
                $app['config']['tim']['account_type'],
                $app['config']['tim']['private_key'],
                $app['config']['tim']['public_key'],
                $app['config']['tim']['administrator']
            );
        });
    }
}