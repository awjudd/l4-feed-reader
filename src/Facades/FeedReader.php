<?php namespace Awjudd\FeedReader\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Illuminate\View\Environment
 */
class FeedReader extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'feedreader'; }

}