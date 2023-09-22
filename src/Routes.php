<?php declare(strict_types=1);

return [
    [
        'GET',
        '/',
        'App\Homepage\Controller\IndexController#show'
    ],
    [
        'GET',
        '/postcode',
        'App\PostcodeChecker\Controller\PostcodeCheckerController#show'
    ]
    ];
    