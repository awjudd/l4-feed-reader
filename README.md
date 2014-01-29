Laravel 4 - Feed Reader
===============

A simple RSS feed reader for **Laravel 4.1**

## Features

 * One command to read any RSS feed
 * Different RSS feed profiles enabled

## Quick Start

In the `require` key of `composer.json` file add the following

```
"awjudd/feed-reader": "1.0.*"
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

Once published, the configuration file contains an array of profiles.  These will define how the RSS feed reader will react.  By default the "default" profile will used.  For more information on: http://simplepie.org/wiki/reference/simplepie/start