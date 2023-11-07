<?php

namespace Duckstery\Laravel\Analyzer;

use Duckstery\Laravel\Analyzer\Middleware\FlushAnalyzer;
use Duckstery\Laravel\Analyzer\Middleware\InitAnalyzer;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;

class ProcessAnalyzerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/process-analyzer.php', 'process-analyzer');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->bootConfig();
        $this->bootMiddleware();
    }

    /**
     * Boot config
     *
     * @return void
     */
    protected function bootConfig(): void
    {
        if (!function_exists('config_path')) return;

        $this->publishes([__DIR__ . '/../config/process-analyzer.php' => config_path('process-analyzer.php')]);
    }

    /**
     * Boot middleware
     *
     * @return void
     */
    protected function bootMiddleware(): void
    {
        $kernel = $this->app[Kernel::class];
        $kernel->pushMiddleware(InitAnalyzer::class);
        $kernel->pushMiddleware(FlushAnalyzer::class);
    }
}
