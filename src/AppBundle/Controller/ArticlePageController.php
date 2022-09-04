<?php


namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Controller\ArticlesController;

class ArticlePageController extends Controller
{

    /**
     * @Route("articles/{article_id}", name="articlePage")
     */

    public function indexAction($article_id)
    {
        $id = $article_id;
        return $this->render('pages/articlePage.html.twig',
        ['id' => $id]);
    }
}