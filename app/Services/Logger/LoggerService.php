<?php

namespace App\Services\Logger;

use App\Services\Logger\Factories\LoggerFactory;
use App\Services\Logger\Interfaces\LoggerInterface;
use Illuminate\Support\Facades\Config;

class LoggerService implements LoggerInterface
{
    protected string $type;
    public function __construct()
    {
        $this->type = config("logger.type");
    }

    public function send(string $message): void
    {
        $adapter = LoggerFactory::getLogger($this->type);
        $adapter->log($message);
    }

    public function sendByLogger(string $message, string $loggerType): void
    {
        $this->setType($loggerType);
        $this->send($message);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }
}
