<?php namespace Awjudd\FeedReader;

use SimplePie;

class FeedReader
{
    private $instance = null;

    public function __construct()
    {
        // Create a new instance of SimplePie
        $this->instance = new SimplePie();
    }
}