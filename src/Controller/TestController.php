<?php
// src/Controller/TestController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    /**
    +    * @Route("/test")
    +    */
    public function index(): Response
    {

        return new Response(
            '<html><body>Hello</body></html>'
        );
    }
}
