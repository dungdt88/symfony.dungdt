<?php

namespace Smart\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $cache = $this->get('liip_doctrine_cache.ns.apc');
        var_dump($cache);
        die('dam tien dung');
        return $this->render('SmartTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
