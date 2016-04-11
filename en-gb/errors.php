<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Errors Language
    |--------------------------------------------------------------------------
    |
    | The following language lines are used for fatal error messages
    |
    */

    "error" => 'Error',
    'unknown-error' => "Sorry, something's gone wrong. We've been notified and are working on a fix.",

    'maintenance' => [
        'title'          => 'Sorry, we’re down for maintenance.',
        'description'    => 'We’ll be back shortly!',
    ],

    'private' => [
        'title' => 'Private Group',
        'description' => 'You are attempting to view a private group.'
    ],

    '400' => [
        'title'          => 'We are sorry but your request contains bad syntax and cannot be fulfilled.',
    ],

    '403' => [
        'title'         => 'We are sorry but you do not have permission to access this page'
    ],

    '404' => [
        'title'          => 'We are sorry but the page you are looking for was not found.'
    ],

    '500' => [
        'title'         => 'We are sorry but our server encountered an internal error.',
        'back'          => 'Back to previous page'
    ]

];
