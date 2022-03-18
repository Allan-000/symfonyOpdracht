<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class appController extends AbstractController{
    /**
     * @Route("/")
     */
    public function homePage(){
        return $this->render('userTemplates/home.html.twig', []);
    }
    /**
     * @Route("/categories")
     */
    public function categoriesPage(){
        $categories=['Vlees','Vis','Vegetarisch'];
        return $this->render('userTemplates/categories.html.twig',[
            'categories' => $categories
        ]
    );
    }
}