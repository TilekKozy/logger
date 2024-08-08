<?php

namespace App\Services\Logger\Adapters;

use App\Services\Logger\Interfaces\LoggerAdapterInterface;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class FileLogger implements LoggerAdapterInterface
{
    protected string $disk;
    protected string $filePath;

    public function __construct()
    {
        $this->disk = Config::get('logger.disk');
        $this->filePath = Config::get('logger.filePath');
    }

    public function log(string $message): void
    {
        $date = date('Y-m-d H:i:s');
        $formattedMessage = "[$date] $message" . PHP_EOL;
        Storage::disk($this->disk)->append($this->filePath, $formattedMessage);
    }
}
