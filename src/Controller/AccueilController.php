<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/page1', name: 'app_page1')]
    public function page1(): Response
    {
        $info=['Loper','Dave','daveloper@code.com','01/01/1970'];
        return $this->render('accueil/page1.html.twig', [
            'controller_name' => 'AccueilController',
            'informations'=> $info,
        ]);
    }


    #[Route('/page2', name: 'app_page2')]
    public function page2(): Response
    {
        $info=['lastname'=>'dosana','firstname'=>'sara','email'=>'dosana@gmail.fr','birthdate'=>'24/09/2000'];
        return $this->render('accueil/page2.html.twig', [
            'controller_name' => 'AccueilController',
            'informations'=>$info,
        ]);
    }
}
