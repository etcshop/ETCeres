<?php

namespace ETCeres\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresCoconutItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('ETCeres::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}