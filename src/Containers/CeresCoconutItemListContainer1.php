<?php

namespace ETCeres\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresCoconutItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('ETCeres::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}