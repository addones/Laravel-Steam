<?php
/**
 * Created by PhpStorm.
 * User: WorkingSucks-01
 * Date: 18/06/13
 * Time: 8:34.
 */

namespace Dawoea\SteamApi\Containers;

class Package extends BaseContainer
{
    public $id;
    public $name;
    public $page_image;
    public $header;
    public $small_logo;
    public $apps;
    public $page_content;
    public $price;
    public $platforms;
    public $release;

    public function __construct($package, $id)
    {
        $this->id = $id;
        $this->name = $package->name;
        $this->apps = $package->apps;
        $this->page_content = $this->checkIssetField($package, 'page_content', 'none');
        $this->header = $this->checkIssetField($package, 'header_image', 'none');
        $this->small_logo = $this->checkIssetField($package, 'small_logo', 'none');
        $this->page_image = $this->checkIssetField($package, 'page_image', 'none');
        $this->price = $this->formatPriceObject($package, 'price');
        $this->platforms = $package->platforms;
        $this->release = $package->release_date;
    }
}
