Laravel 5 - Feed Reader
===============

A simple RSS feed reader for **Laravel 5**

## Features

 * One command to read any RSS feed
 * Different RSS feed profiles enabled

## Quick Start

In the `require` key of `composer.json` file add the following:

```
"awjudd/feed-reader": "1.3.*"
```

Run the Composer update command

```
$ composer update
```

In your `config/app.php` add `'Awjudd\FeedReader\FeedReaderServiceProvider'` to the end of the `$providers` array

```php
'providers' => array(
    Illuminate\Auth\AuthServiceProvider::class,
    Illuminate\Broadcasting\BroadcastServiceProvider::class,
    ...
    Awjudd\FeedReader\FeedReaderServiceProvider::class,

),

'aliases' => array(
    'App' => Illuminate\Support\Facades\App::class,
    'Artisan' => Illuminate\Support\Facades\Artisan::class,
    ...
    'FeedReader' => Awjudd\FeedReader\Facade::class,
),
```

## Setup

### Publishing the Configuration

After installing through composer, you should publish the config file.  To do this, run the following command:

```
$ php artisan vendor:publish
```

### Configuration Values

Once published, the configuration file contains an array of profiles.  These will define how the RSS feed reader will react.  By default the "default" profile will used.  For more information on: [here](http://simplepie.org/wiki/reference/simplepie/start).

### How to use

Once you have all of the configuration settings set up, in order to read a RSS feed all you need to do is call the `read` function:

```php
FeedReader::read('http://www.example.com/rss');
```

This function accepts 2 parameters however, the second parameter is optional.  The second parameter is the configuration profile that should be used when reading the RSS feed.

This will return to you the SimplePie object with the RSS feed in it.

## License

Feed Reader is free software distributed under the terms of the MIT license

## Additional Information

Any issues, please [report here](https://github.com/awjudd/l4-feed-reader/issues)
