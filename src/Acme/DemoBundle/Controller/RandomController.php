<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RandomController extends Controller
{
    public function indexAction($limit)
    {
        return $this->render('AcmeDemoBundle:Random:index.html.twig', array(
                // ...
            ));    }

}
