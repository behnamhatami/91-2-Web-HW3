<?php

namespace HW3\NewsBundle\Controller;

use Doctrine\Tests\Common\Annotations\Null;
use HW3\NewsBundle\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;



class DefaultController extends Controller
{
    public function indexAction($name)
    {
        
        return $this->render('NewsBundle:Default:index.html.twig', array('name' => $name));
    }

}
