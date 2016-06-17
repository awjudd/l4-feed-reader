<?php

namespace Awjudd\FeedReader;

use Illuminate\Support\ServiceProvider;

class FeedReaderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->handleConfigs();
        $this->setupProcessor();
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('rss-feed-reader', FeedReader::class);
    }

    /**
     * Register the configuration.
     */
    private function handleConfigs()
    {
        $configPath = __DIR__.'/../config/rss-feed-reader.php';
        $this->publishes([$configPath => config_path('rss-feed-reader.php')]);
        $this->mergeConfigFrom($configPath, 'rss-feed-reader');
    }

    private function setupProcessor()
    {
        $this->app->singleton(FeedReader::class);
    }

}