<?php  

return[
    // 'publicpath'=>env('APP_ENV')==='production' ? env('PRODUCTION_PUBLIC_PATH') : env('LOCAL_PUBLIC_PATH'),

   'images' => [
        'favIcon' => [
            'local' => '/asserts/user/img/rahatlogo.jpg',
            'production' => env('PUBLIC_ASSETS_PATH') . '/asserts/user/img/rahatlogo1.jpg',
        ],
        'banner' => [
            'local' => env('LOCAL_ASSETS_PATH') . 'user/img/banner.jpg',
            'production' => env('PUBLIC_ASSETS_PATH') . 'user/img/banner.jpg',
        ],
    ],
];