<?php

namespace Dawoea\SteamApi\Exceptions;

class ApiArgumentRequired extends \Exception
{
    public function __construct()
    {
        parent::__construct(sprintf('Arguments are required for this service.'));
    }
}
