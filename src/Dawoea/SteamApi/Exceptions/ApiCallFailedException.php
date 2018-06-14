<?php

namespace Dawoea\SteamApi\Exceptions;

class ApiCallFailedException extends \Exception
{
    /**
     * @param string     $message
     * @param \Exception $previous
     */
    public function __construct($message, $code, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
