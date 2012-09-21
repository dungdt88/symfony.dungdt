<?php

namespace Smart\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $this->get('doctrine.orm.entity_manager');
        die('dam tien dung');
        return $this->render('SmartTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
