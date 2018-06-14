<?php

namespace Dawoea\SteamApi\Containers;

use Dawoea\SteamApi\Client;

class Id
{
    public $id32;

    public $id64;

    public $id3;

    public $communityId;

    public $steamId;

    /**
     * @param int $id
     */
    public function __construct($id)
    {
        $client = new Client();

        $steamIds = $client->convertId($id);

        $this->id32 = $steamIds->id32;
        $this->id64 = $steamIds->id64;
        $this->id3 = $steamIds->id3;

        $this->steamId = $this->id64;
        $this->communityId = $this->id32;
    }
}
