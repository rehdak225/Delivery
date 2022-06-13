<?php

namespace Kadher\CigogneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@KadherCigogne/Default/index.html.twig');
    }
}
