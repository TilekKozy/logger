<?php

namespace App\Services\Logger\Interfaces;

interface LoggerAdapterInterface
{
    /**
     * @param string $message
     *
     * @return void
     */
    public function log(string $message): void;
}
