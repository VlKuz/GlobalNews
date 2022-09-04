<?php


namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AboutPageController extends Controller
{
    /**
     * @Route("/about", name="about")
     */

    public function indexAction()
    {
       return $this->render('pages/about.html.twig');
    }
}