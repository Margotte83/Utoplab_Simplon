<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('blog/index.html.twig');#, [
            #'controller_name' => 'BlogController'
       # ]);

    }  
     /**
     * @Route("/", name="home")
     * @return Response
     */
    public function home(): Response
    {
        return $this->render('blog/home.html.twig');
        /*affiche fichier twig*/
    }
    
     /**
     * @Route("/blog/article/12", name="blog_show")
     * @return Response
     */
    public function show(): Response 
    {
        return $this->render('blog/show.html.twig');
    }

    /**
     *  @Route("/blog/news", name="news")
     * @return Response
     */
    public function new(): Response {

        $images = [

        ];
        return $this->render('blog/news.html.twig', [
            "images" => $images
        ]);
    }

    /**
     * @Route("/blog/articles", name="articles")
     * @return Response
     */

    public function articles(): Response
    {
        return $this->render('blog/articles.html.twig');
    }

    /**
     * @Route("/blog/contact", name="contact")
     * @return Response
     */

     public function contact(): Response 
     {
        return $this->render('blog/contact.html.twig');
     }

   
}

