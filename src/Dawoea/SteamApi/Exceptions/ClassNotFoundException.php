<?php

namespace Dawoea\SteamApi\Exceptions;

class ClassNotFoundException extends \Exception
{
    public function __construct($class)
    {
        parent::__construct(sprintf('The called class ['.$class.'] does not exist.'));
    }
}
