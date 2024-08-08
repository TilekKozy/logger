<?php

use App\Services\Logger\Adapters\DbLogger;
use App\Services\Logger\Adapters\FileLogger;
use App\Services\Logger\Adapters\MailLogger;

return [
    'type' => env('LOGGER_TYPE', 'email'),
    'disk'=> env('LOGGER_DISK','local'),
    'filePath' => env('LOGGER_FILE_PATH','logs/logfile.log'),
    'types' => [
        'db' => DbLogger::class,
        'email' => MailLogger::class,
        'file' => FileLogger::class,
    ]
];
