<?php

return [
    'driver' => env('IMAGE_DRIVER', 'gd'),
    'upload_path' => env('IMAGE_UPLOAD_PATH', '/uploads'),
    'access_path' => env('IMG_PATH', 'http://127.0.0.1:8000/uploads'),


    1 => ['with' => 35, 'height' => 35],
    2 => ['with' => 480, 'height' => 635],
    3 => ['with' => 1920, 'height' => 700],
    4 => ['with' => 960, 'height' => 960],
    5 => ['with' => 105, 'height' => 140],
];
