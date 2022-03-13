<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class loginController{
    
    /**
     * @Route("/home/login")
     */
    public function login(){
        return new Response("<h2>This is login page</h2>
                            <a href='/'>home</a>");
    }
}