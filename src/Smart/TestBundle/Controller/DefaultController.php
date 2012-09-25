<?php

namespace Smart\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Kitpages\DataGridBundle\Model\GridConfig;
use Kitpages\DataGridBundle\Model\Field;


class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('SmartCoreBundle:Post');
        $posts = $repo->findAll();

        $queryBuilder = $repo->createQueryBuilder('p');
        
        $gridConfig = new GridConfig;
        $gridConfig
            ->setCountFieldName('p.id')
            ->addField(new Field('p.id', array(
                    'label' => 'ID',
                    'sortable' => true,
            )))
            ->addField(new Field('p.title', array(
                    'label' => 'Title',
                    'filterable' => true
            )))
            ->addField(new Field('p.created'), array(
                    'label' => 'Created',
                    'sortable' => true,
                    'formatValueCallback' => function($value) {
                        return $value->format('Y/m/d');
                    }
            ))
            ->addField(new Field('p.content', array(
                    'label' => 'Content', 
            )))
        ;
        
        $gridManager = $this->get('kitpages_data_grid.manager');
        $grid = $gridManager->getGrid($queryBuilder, $gridConfig, $this->getRequest());
        
        return $this->render('SmartTestBundle:Default:index.html.twig', array(
                'grid' => $grid
        ));
    }
    
    /**
     * 
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listOptionsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('SmartCoreBundle:WpOptions');
        
        $queryBuilder = $repo->createQueryBuilder('wo');
        
        $gridConfig = new GridConfig;
        $gridConfig
            ->setCountFieldName('wo.id')
            ->addField(new Field('wo.id', array(
                    'label' => 'Option ID',
                    'sortable' => true,
                    'filterable' => true,
            )))
            ->addField(new Field('wo.optionName', array(
                    'label' => 'Name',
                    'filterable' => true,
                    'sortable' => true,
            )))
            ->addField(new Field('wo.optionValue', array(
                    'label' => 'Value',
                    'filterable' => true,
            )))
            ->addField(new Field('wo.autoload', array(
                    'label' => 'Autoload',
                    'filterable' => true,
            )))
        ;
        
        $gridManager = $this->get('kitpages_data_grid.manager');
        var_dump(get_class($gridManager));
        $grid = $gridManager->getGrid($queryBuilder, $gridConfig, $this->getRequest());
        
        return $this->render('SmartTestBundle:Default:list_options.html.twig', array(
                'grid' => $grid
        ));
    }
    
    /**
     * 
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listTeamsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('SmartCoreBundle:Team');
        
        $queryBuilder = $repo->createQueryBuilder('t')
            ->select('t, sportClass, sport')
            ->join('t.sportClass', 'sportClass')
            ->join('sportClass.sport', 'sport')
            ->groupBy('t.id')
        ;
        
        $gridConfig = new GridConfig;
        $gridConfig
            ->setCountFieldName('t.id')
            ->setCountFieldName('sportClass.id')
            ->addField(new Field('t.id', array(
                    'label' => 'Team ID',
                    'sortable' => true,
            )))
            ->addField(new Field('t.name', array(
                    'label' => 'Name',
                    'filterable' => true,
                    'sortable' => true,
            )))
            ->addField(new Field('t.sportClassId', array(
                    'label' => 'Sport Class ID',
                    'filterable' => true,
                    'sortable' => true,
            )))
            ->addField(new Field('sportClass.name', array(
                    'label' => 'Sport Class',
                    'filterable' => true,
                    'sortable' => true,
            )))
            ->addField(new Field('sportClass.sport.name', array(
                    'label' => 'Sport Name',
                    'filterable' => true,
                    'sortable' => true,
            )))
        ;
    
        $gridManager = $this->get('kitpages_data_grid.manager');
        $grid = $gridManager->getGrid($queryBuilder, $gridConfig, $this->getRequest());
    
        return $this->render('SmartTestBundle:Default:list_teams.html.twig', array(
                'grid' => $grid
        ));
    }
}
