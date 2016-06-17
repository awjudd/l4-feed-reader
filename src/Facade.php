<?php

namespace Awjudd\FeedReader;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'rss-feed-reader';
    }
}