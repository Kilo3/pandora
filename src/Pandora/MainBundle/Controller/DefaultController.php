<?php

namespace Pandora\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function indexAction($url)
    {
        $hp = $this->getDoctrine()->getManager();
        $menu = $hp->getRepository('PandoraMainBundle:Page')->findBy(array('parent'=>NULL), array('order_column'=>'DESC'));
        
        $request = $this->container->get('request');
        $url = explode("/",$request->getPathInfo());
        
        $page = $hp->getRepository('PandoraMainBundle:Page')->findOneBy(array('url'=>$url[count($url)-1]));
        //dump($page, $url[count($url)-1]);die();
        if(!empty($page)){
            return $this->render('PandoraMainBundle:Default:page.html.twig', array(
                'page' => $page,
                'menu' => $menu
            ));    
        }else{
            dump(empty($page));die();
        }
        
        
        //$menu = $hp->getRepository('PandoraMainBundle:Page')->findBy(array('url'=>$currentUrl->getId()), array('order_column'=>'ASC'));
        
        //return $this->render('PandoraMainBundle:Default:index.html.twig');
    }
    
    public function mainAction()
    {
        $hp = $this->getDoctrine()->getManager();
        $menu = $hp->getRepository('PandoraMainBundle:Page')->findBy(array('parent'=>NULL), array('order_column'=>'DESC'));
        $slider = $hp->getRepository('PandoraMainBundle:Slider')->findAll();
        return $this->render('PandoraMainBundle:Default:main.html.twig', array(
            'menu' => $menu,
            'slider' => $slider,
        ));    
        
    }
    
    public  function loginAction(){
        $request = $this->getRequest();
        $session = $request->getSession();
        // get the login error if there is one
        //dump($request->attributes,SecurityContext::ACCESS_DENIED_ERROR);die();
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
            
        }

        return $this->render('PandoraMainBundle:Default:login.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }
}
