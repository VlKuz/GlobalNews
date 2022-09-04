<?php


namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends Controller
{
    /**
     * @Route("/", name="home")
     */

    public function indexAction()
    {
        return $this->render('pages/home.html.twig');
    }
}