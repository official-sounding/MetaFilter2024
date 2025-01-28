<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Support\Facades\Log;

trait LoggingTrait
{
    public function logDebugMessage(string $message): void
    {
        Log::debug($message);
    }

    // TODO: Change to Throwable
    public function logError($exception, ?string $customMessage = null): void
    {
        if ($customMessage !== null) {
            Log::error($customMessage);
        }

        if (gettype($exception) === 'string') {
            $exceptionMessage = $exception;
        } else {
            $exceptionMessage = $exception->getMessage();

            if ($exception->getFile()) {
                $exceptionMessage .= ' in ' . $exception->getFile();
            }

            if ($exception->getLine()) {
                $exceptionMessage .= ' on line ' . $exception->getLine();
            }
        }

        Log::error($exceptionMessage);
    }

    public function logInfo(string $info): void
    {
        Log::info($info);
    }
}
