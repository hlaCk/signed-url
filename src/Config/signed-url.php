<?php

return [

    /*
    * This string is used the to generate a signature. You should
    * keep this value secret.
    */
    'signatureKey' => env('APP_KEY'),

    /*
     * The default expiration time of a URL in days.
     */
    'default_expiration_time_in_days' => 30,

    /*
     * These strings are used a parameter names in a signed url.
     */
    'parameters' => [
        'expires'   => 'expires',
        'signature' => 'signature',
    ],

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    | This option indicates the middleware to change language.
    |
    */
    'middleware' => 'Hlack\SignedUrl\Middleware\ValidateSignedUrl',

];
