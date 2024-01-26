<?php

namespace App\Controller;

use App\Repository\ArtistRepository;
use App\Repository\DiscRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    private $artistRepo;
    private $discRepo;
    public function __construct(ArtistRepository $artistRepo, DiscRepository $discRepo)
    {
           //On va avoir souvent besoin d'injecter les respositories de nos entités dans les contrôleurs et les services
    //Pour ne pas les injecter dans chaque fonction, on va les instancier UNE SEULE fois dans le constructeur de notre contrôleur:
    //N'oubliez pas d'importer vos respositories (les lignes "use..." en haut de la page)
      $this->artistRepo= $artistRepo;
      $this->discRepo=$discRepo;  
    }
    #[Route('/accueil', name: 'app_accueil')]
    public function index(): Response
    {

     // `findAll()` -> pour recuperer tout les artistes de la base de donnée 'Artsit':
        $artistes= $this->artistRepo->findAll();
return $this->render('accueil/index.html.twig',[
    'controller_name'=>'AccueilController',
    'artistes'=>$artistes
]);
    }
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
