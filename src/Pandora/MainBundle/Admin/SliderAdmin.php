<?php

namespace Pandora\MainBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;



//
//use Symfony\Component\Form\AbstractType;
//use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\Form\FormEvents;
//use Symfony\Component\Form\FormEvent;
//use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
//use Symfony\Component\Form\FormInterface;
 
class SliderAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
           ->add('images', 'sonata_type_model_list', array('required' => false), array('link_parameters' => array('context' => 'gallery')))
        ;
        
//        ->add('teams', 'sonata_type_collection', array(
//                            'by_reference'       => false,
//                            'cascade_validation' => true,
//                        ), array(
//                            'edit' => 'inline',
//                            'inline' => 'table'
//                        ))
        
        
    }
    
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            
            
            
//            ->add('_action', 'actions', array(
//                'actions' => array(
//                    'Clone' => array(
//                        'template' => 'EasyMainBundle:CRUD:list__action_clone.html.twig'
//                    )
//                )
//            ))
        ;
    }
    
    
    
}