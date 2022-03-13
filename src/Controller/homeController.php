<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class homeController{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response("<h2>This is home page</h2>
                            <a href='/home/login'>Login</a>");
    }
}