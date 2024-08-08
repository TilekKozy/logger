<?php

namespace App\Http\Controllers;

use App\Services\Logger\Interfaces\LoggerInterface;
use Illuminate\Support\Facades\Config;

class LoggerController extends Controller
{
    public function __construct(protected LoggerInterface $logger)
    {
    }

    /**
     * Sends a log message to the default logger.
     */
    public function log(): void
    {
        $this->logger->send('test');
    }

    /**
     * Sends a log message to a special logger.
     *
     * @param string $type
     */
    public function logTo(string $type): void
    {
        $this->logger->sendByLogger('test', $type);
    }

    /**
     * Sends a log message to all loggers.
     */
    public function logToAll(): void
    {
        $loggerTypes = Config::get('logger.types');
        foreach($loggerTypes as $key => $value) {
            $this->logger->sendByLogger('test', $key);
        }
    }
}
