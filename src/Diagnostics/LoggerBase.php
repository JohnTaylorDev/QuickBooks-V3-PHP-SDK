<?php
namespace QuickBooksOnline\API\Diagnostics;

/**
 * This file contains an interface for Logging.
 */
class LoggerBase
{

    /**
     * Logs messages depending on the ids trace level.
     *
     * @param TraceLevel $idsTraceLevel IDS Trace Level.
     * @param string $messageToWrite The message to write.
     *
     */
    public function Log($idsTraceLevel, $messageToWrite)
    {
    }
}
