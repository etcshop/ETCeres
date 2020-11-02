<?php

namespace ETCeres\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresCoconutMobileNavigationVueTemplateContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('ETCeres::PageDesign.Components.MobileNavigation');
    }
}

?>
