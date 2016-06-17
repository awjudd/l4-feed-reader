<?php namespace Awjudd\FeedReader;
/**
 * @Author: Andrew Judd
 * @Date:   2015-03-22 22:16:19
 * @Last Modified by:   Andrew Judd
 * @Last Modified time: 2015-03-22 22:22:37
 */

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
        $this->app->singleton('feed-reader', AssetProcessor::class);
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
        $this->app->singleton(AssetProcessor::class);
    }

}