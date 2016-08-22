<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Switch this package on/off. Usefull for testing...
    |--------------------------------------------------------------------------
     */

    'enabled'         => true,

    /*
    |--------------------------------------------------------------------------
    | File path where themes will be located.
    | Can be outside default views path EG: resources/themes
    | Leave it null if you place your themes in the default views folder
    | (as defined in config\views.php)
    |--------------------------------------------------------------------------
     */

    'themes_path'     => realpath(base_path('resources/themes')),

    /*
    |--------------------------------------------------------------------------
    | Set behavior if an asset is not found in a Theme hierarcy.
    | Available options: THROW_EXCEPTION | LOG_ERROR | ASSUME_EXISTS | IGNORE
    |--------------------------------------------------------------------------
     */

    'asset_not_found' => 'IGNORE',

    /*
    |--------------------------------------------------------------------------
    | Set the Active Theme. Can be set at runtime with:
    |  Themes::set('theme-name');
    |--------------------------------------------------------------------------
     */

    'active'          => env('THEME_NAME'),

    /*
    |--------------------------------------------------------------------------
    | Define available themes. Format:
    |
    |     'theme-name' => [
    |         'extends'         => 'theme-to-extend',  // optional
    |         'views-path'     => 'path-to-views',    // defaults to: resources/views/theme-name
    |         'asset-path'     => 'path-to-assets',   // defaults to: public/theme-name
    |
    |        // you can add your own custom keys and retrieve them with Theme::config('key');
    |         'key'             => 'value',
    |     ],
    |
    |--------------------------------------------------------------------------
     */

    'themes'          => [

        'blog-theme' => [
            'extends'    => null,
            'views-path' => 'views',
            'asset-path' => '',
        ],

    ],

];