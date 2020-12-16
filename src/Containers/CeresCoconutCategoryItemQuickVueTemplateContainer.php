<?php

namespace ETCeres\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresCoconutCategoryItemQuickVueTemplateContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('ETCeres::ItemList.Components.CategoryItemQuick');
    }
}
