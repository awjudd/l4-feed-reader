<?php namespace Awjudd\FeedReader;

use Config;
use SimplePie;

class FeedReader
{
    private $cache_location = null;

    public function __construct()
    {
        $this->cache_location = storage_path() . DIRECTORY_SEPARATOR . Config::get('feedreader::cache.location', 'rss-feeds') . DIRECTORY_SEPARATOR;

        // Check if the folder is available
        if(!file_exists($this->cache_location))
        {
            // It didn't, so make it
            mkdir($this->cache_location, 0777);

            // Also add in a .gitignore file
            file_put_contents($this->cache_location . '.gitignore', '!.gitignore' . PHP_EOL . '*');
        }
    }

    /**
     * Used to parse an RSS feed.
     * 
     * @return SimplePie
     */
    public function read($url, $enable_cache = false, $force_feed = false)
    {
        // Setup the object
        $sp = new SimplePie;

        // Configure it
        $sp->set_feed_url($url);
        $sp->enable_cache($enable_cache);
        $sp->force_feed($force_feed);
        $sp->set_cache_location($this->cache_location);

        // Grab it
        $sp->init();

        // We are done, so return it
        return $sp;
    }
}