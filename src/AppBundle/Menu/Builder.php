<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'homepage'));
        $menu->addChild('Register', array('route' => 'fos_user_registration_register'));
        $menu->addChild('Login', array('route' => 'fos_user_security_login'));
        $menu->addChild('Add Advert', array('route' => 'advert_new'));
        return $menu;
    }

//    public function sideMenu(FactoryInterface $factory, array $options)
//    {
//        $menu = $factory->createItem('sidemenu');
//
//        $menu->addChild('')
//
//    }
}