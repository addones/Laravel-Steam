<?php

namespace Dawoea\SteamApi\Steam;

use Dawoea\SteamApi\Client;
use NukaCode\Database\Collection;
use Dawoea\SteamApi\Containers\Package as PackageContainer;

class Package extends Client
{
    public function __construct()
    {
        parent::__construct();
        $this->url = 'https://store.steampowered.com/';
        $this->interface = 'api';
    }

    public function packageDetails($packIds, $cc = 'us', $language = 'english')
    {
        // Set up the api details
        $this->method = 'packagedetails';
        $this->version = null;
        // Set up the arguments
        $arguments = [
            'packageids' => $packIds,
            'cc'         => $cc,
            'l'          => $language,
        ];
        // Get the client
        $client = $this->setUpClient($arguments);
        $packs = $this->convertToObjects($client, $packIds);

        return $packs;
    }

    protected function convertToObjects($package, $packIds)
    {
        $convertedPacks = $this->convertPacks($package, $packIds);
        $package = $this->sortObjects($convertedPacks);

        return $package;
    }

    /**
     * @param $packs
     *
     * @return Collection
     */
    protected function convertPacks($packages, $packIds)
    {
        $convertedPacks = new Collection();
        foreach ($packages as $package) {
            if (isset($package->data)) {
                $convertedPacks->add(new PackageContainer($package->data, $packIds));
            }
        }

        return $convertedPacks;
    }
}
