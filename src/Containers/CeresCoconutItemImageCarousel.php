<?php

namespace ETCeres\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresCoconutItemImageCarousel
{
    public function call(Twig $twig):string
    {
        return $twig->render('ETCeres::Item.ItemImageCarousel');
    }
}
