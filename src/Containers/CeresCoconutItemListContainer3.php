<?php

namespace ETCeres\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresCoconutItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('ETCeres::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}