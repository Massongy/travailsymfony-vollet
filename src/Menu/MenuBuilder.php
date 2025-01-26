<?php

namespace App\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class MenuBuilder
{
    private $factory;

    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(RequestStack $requestStack)
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild('Articles', array(
            'route' => 'articles'
        ));

   
        
        $menu->addChild('Catégories', array(
            'route' => 'categories'
        ));


        $menu->addChild('Blog', array(
            'route' => 'blog'
        ));

        $menu->setChildrenAttribute('class', 'nav nav-item');

        

        
        
        
        // ... add more children

        return $menu;
    }
}
?>