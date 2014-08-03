Laravel 4.2 - Feed Reader
===============

A simple RSS feed reader for **Laravel 4.2**

## Features

 * One command to read any RSS feed
 * Different RSS feed profiles enabled

## Quick Start

In the `require` key of `composer.json` file add the following:

```
"awjudd/feed-reader": "1.1.*"
```

Run the Composer update command

```
$ composer update
```

In your `config/app.php` add `'Awjudd\Layoutview\LayoutviewServiceProvider'` to the end of the `$providers` array

```php
'providers' => array(

    'Illuminate\Foundation\Providers\ArtisanServiceProvider',
    'Illuminate\Auth\AuthServiceProvider',
    ...
    'Awjudd\FeedReader\FeedReaderServiceProvider',

),

'aliases' => array(

    'App'             => 'Illuminate\Support\Facades\App',
    'Artisan'         => 'Illuminate\Support\Facades\Artisan',
    ...
    'FeedReader'      => 'Awjudd\FeedReader\Facades\FeedReader',
),
```

## Setup

### Publishing the Configuration

After installing through composer, you should publish the config file.  To do this, run the following command:

```
$ php artisan config:publish awjudd/feed-reader
```

### Configuration Values

Once published, the configuration file contains an array of profiles.  These will define how the RSS feed reader will react.  By default the "default" profile will used.  For more information on: [here]http://simplepie.org/wiki/reference/simplepie/start.

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