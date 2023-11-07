<?php


use App\Http\Middleware\FlushAnalyzer;
use App\Http\Middleware\InitAnalyzer;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\Facades\Storage;
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
        $this->bootStorage();
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

    /**
     * Booth storage
     *
     * @return void
     */
    protected function bootStorage(): void
    {
        if (!function_exists('storage_path')) return;

        // Get path
        $path = storage_path('analyzer');
        if (!Storage::exists($path)) {
            // Check if directory exist
            Storage::createDirectory($path);
        }
    }
}
