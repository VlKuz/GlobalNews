<?php


namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class RegPageController extends Controller
{
    /**
     * @Route ("/registration", name="registration")
     */

    public function indexAction()
    {
        return $this->render('pages/reg.html.twig');
    }
}