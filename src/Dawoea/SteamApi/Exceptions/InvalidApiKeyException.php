<?php

namespace Dawoea\SteamApi\Exceptions;

class InvalidApiKeyException extends \Exception
{
    public function __construct()
    {
        parent::__construct(sprintf('You must use a valid API key to connect to steam.'));
    }
}
