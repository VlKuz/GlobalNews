<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends Controller
{

    /**
     * @Route ("/")
     */
    public function indexAction()
    {
        $arr = [
            1 => ['topic'=>'Мир', 'title'=>'Заголовок1', 'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium atque aut beatae distinctio dolorem
    explicabo, minima molestias nemo, quia quis, quos ratione reiciendis sed voluptates. Ea nulla numquam soluta?', 'date'=>'10.01.2022'],
            2 => ['topic'=>'Спорт','title'=>'Заголовок2', 'content'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium atque aut beatae distinctio dolorem
    explicabo, minima molestias nemo, quia quis, quos ratione reiciendis sed voluptates. Ea nulla numquam soluta?', 'date'=>'11.01.2022'],
            3 => ['topic'=>'Культура','title'=>'Заголовок3', 'content'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium atque aut beatae distinctio dolorem
    explicabo, minima molestias nemo, quia quis, quos ratione reiciendis sed voluptates. Ea nulla numquam soluta?', 'date'=>'15.01.2022']
        ];


        return $this ->render('pages/home.html.twig',
            array( 'arr' => $arr));
    }
}