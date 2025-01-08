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

        'feedback1'=>'asserts/user/img/haj/person1.jpg',
        'feedback2'=>'asserts/user/img/haj/person2.jpg',
        'feedback3'=>'asserts/user/img/haj/person3.jpg',







    ],
];