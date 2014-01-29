<?php
return array(
    'profiles' => array(

        /**
         * The default configuration information
         * 
         * @var array
         */
        'default' => array(

            /**
             * All of the cache settings
             * 
             * @var array
             */
            'cache' => array(

                /**
                 * How long the cache is maintained in seconds
                 * 
                 * @var int
                 */
                'duration' => 3600,

                /**
                 * Whether or not caching is enabled.
                 * 
                 * @var boolean
                 */
                'enabled' => false,

                /**
                 * The folder in the "storage"
                 * 
                 * @var string
                 */
                'location' => 'rss-feeds',
            ),

            /**
             * Whether or not to force the data feed to be treated as an 
             * RSS feed.
             * 
             * @var boolean
             */
            'force_feed' => false,
        ),
    ),
);