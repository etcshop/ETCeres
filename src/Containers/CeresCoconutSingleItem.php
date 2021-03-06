<?php

namespace ETCeres\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresCoconutSingleItem
{
    public function call(Twig $twig):string
    {
        return $twig->render('ETCeres::Item.Components.SingleItem');
    }
}
