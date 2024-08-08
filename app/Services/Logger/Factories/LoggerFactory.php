<?php

namespace App\Services\Logger\Factories;

use App\Services\Logger\Interfaces\LoggerAdapterInterface;
use Illuminate\Support\Facades\Config;
use InvalidArgumentException;

class LoggerFactory
{
    /**
     * @param string $type
     *
     * @return LoggerAdapterInterface
     */
    public static function getLogger(string $type): LoggerAdapterInterface
    {
        $loggerTypes = Config::get('logger.types');
        try {
            $logger = $loggerTypes[$type];
        } catch(\Exception $exception) {
            throw new InvalidArgumentException("Неподдерживаемый тип логгера: $type");
        }
        return new $logger();
    }

}
