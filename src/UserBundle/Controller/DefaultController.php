<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$user = new User();
    	$em = $this->getDoctrine()->getManager();
    	$em->persist($user);
    	$em->flush();
        return $this->render('UserBundle:Default:index.html.twig');
    }
}
