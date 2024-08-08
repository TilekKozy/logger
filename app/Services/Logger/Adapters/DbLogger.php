<?php

namespace App\Services\Logger\Adapters;

use App\Models\DbLog;
use App\Services\Logger\Interfaces\LoggerAdapterInterface;

class DbLogger implements LoggerAdapterInterface
{

    public function log(string $message): void
    {
        DbLog::create(['message' => $message]);
    }
}
