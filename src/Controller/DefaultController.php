<?php
// src/Controller/WildController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/home", name="app_index")
     */
    public function index() :Response
    {
        return $this->render('home/index.html.twig', [
            'website' => 'Wild Séries',
        ]);
    }

}
