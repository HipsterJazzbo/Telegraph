<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Services
    |--------------------------------------------------------------------------
    |
    | Here you should define you configuration for each service you want to
    | use, including any customer services you might create.
    |
    */

    'services' => [
        'apns' => [
            'sandbox'     => true,
            'certificate' => 'path/to/certificate.pem',
            'passphrase'  => null // Optional
        ],

        'gcm' => [
            'key' => 'your-api-key'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Strict Mode
    |--------------------------------------------------------------------------
    |
    | If enabled, any device with an unknown service will throw an exception.
    | Otherwise, the device will fail silently and the push will continues
    |
    */

    'strict' => false,

];
