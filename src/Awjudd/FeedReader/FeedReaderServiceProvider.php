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
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
     * Bootstrap the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerConfiguration();
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// Register any bindings
		$this->registerBindings();
	}

	/**
     * Register the application bindings that are required.
     */
    private function registerBindings()
    {
        // Bind to the "Asset" section
        $this->app->bind('feedreader', function() {
            return new FeedReader();
        });
    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('feed-reader');
	}

    /**
     * Register configuration files, with L5 fallback
     */
    protected function registerConfiguration()
    {
        // Is it possible to register the config?
        if (method_exists($this->app['config'], 'package'))
        {
            $this->app['config']->package('awjudd/feed-reader', __DIR__ . '/config');
        }
        else
        {
            // Derive the full path to the user's config
            $userConfig = app()->configPath() . '/packages/awjudd/feed-reader/config.php';

            // Check if the user-configuration exists
            if(!file_exists($userConfig))
            {
                $userConfig = __DIR__ .'/../../config/config.php';
            }

            // Load the config for now..
            $config = $this->app['files']->getRequire($userConfig);
            $this->app['config']->set('feed-reader::config', $config);
        }
    }

}