<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends Controller
{
    protected $arr = [
        1 => ['topic'=>'Мир',
            'title'=>'Заголовок1',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium atque aut beatae distinctio dolorem explicabo, minima molestias nemo, quia quis, quos ratione reiciendis sed voluptates. Ea nulla numquam soluta?',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad doloremque eaque esse fuga labore minima molestiae natus nesciunt nobis possimus, quaerat rem repellat repellendus repudiandae soluta tempora veniam. Incidunt necessitatibus quaerat ratione saepe tenetur! Accusantium aliquam, asperiores cum dolorem expedita fuga iure laborum laudantium maxime, non odit qui suscipit vel. Ad adipisci aperiam blanditiis consequatur cumque doloremque ea, earum eius eligendi, enim error ex exercitationem, fuga illum iste laudantium nesciunt obcaecati omnis optio placeat quisquam quo quod rem repellat repellendus sequi tempora tempore ut veniam voluptatum. Ab accusamus accusantium adipisci commodi consequatur explicabo fuga incidunt iste, non odit, saepe voluptate?',
            'date'=>'10.01.2022'],
        2 => ['topic'=>'Спорт',
            'title'=>'Заголовок2',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium atque aut beatae distinctio dolorem explicabo, minima molestias nemo, quia quis, quos ratione reiciendis sed voluptates. Ea nulla numquam soluta?',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad doloremque eaque esse fuga labore minima molestiae natus nesciunt nobis possimus, quaerat rem repellat repellendus repudiandae soluta tempora veniam. Incidunt necessitatibus quaerat ratione saepe tenetur! Accusantium aliquam, asperiores cum dolorem expedita fuga iure laborum laudantium maxime, non odit qui suscipit vel. Ad adipisci aperiam blanditiis consequatur cumque doloremque ea, earum eius eligendi, enim error ex exercitationem, fuga illum iste laudantium nesciunt obcaecati omnis optio placeat quisquam quo quod rem repellat repellendus sequi tempora tempore ut veniam voluptatum. Ab accusamus accusantium adipisci commodi consequatur explicabo fuga incidunt iste, non odit, saepe voluptate?',
            'date'=>'11.01.2022'],
        3 => ['topic'=>'Культура',
            'title'=>'Заголовок3',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium atque aut beatae distinctio dolorem explicabo, minima molestias nemo, quia quis, quos ratione reiciendis sed voluptates. Ea nulla numquam soluta?',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad doloremque eaque esse fuga labore minima molestiae natus nesciunt nobis possimus, quaerat rem repellat repellendus repudiandae soluta tempora veniam. Incidunt necessitatibus quaerat ratione saepe tenetur! Accusantium aliquam, asperiores cum dolorem expedita fuga iure laborum laudantium maxime, non odit qui suscipit vel. Ad adipisci aperiam blanditiis consequatur cumque doloremque ea, earum eius eligendi, enim error ex exercitationem, fuga illum iste laudantium nesciunt obcaecati omnis optio placeat quisquam quo quod rem repellat repellendus sequi tempora tempore ut veniam voluptatum. Ab accusamus accusantium adipisci commodi consequatur explicabo fuga incidunt iste, non odit, saepe voluptate?',
            'date'=>'15.01.2022']
    ];

    /**
     * @Route ("/")
     */
    public function indexAction()
    {

        return $this ->render('pages/home.html.twig',
            array( 'arr' => $this->arr));
    }

    public function arrAction()
    {
        return $this->arr;
    }
}