<?php

namespace Huubl\ElementalMaps\Controller;

use DNADesign\Elemental\Controllers\ElementController;
use SilverStripe\Core\Config\Config;
use SilverStripe\View\Requirements;
use Huubl\ElementalMaps\Model\ElementalMaps;

class ElementalMapsController extends ElementController {

    public function init()
    {
        parent::init();

        $config = Config::forClass(ElementalMaps::class);
        Requirements::javascript('https://maps.googleapis.com/maps/api/js?key=' . $config->get('maps_api_key'));

    }

}
