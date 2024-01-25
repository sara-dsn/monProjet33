<?php
    namespace App\Controller;

use App\Entity\contact;
use App\Form\demoFormType;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $form=$this->createForm(ContactFormType::class);

        // nous utilisons la méthode handleRequest() pour traiter la requête HTTP actuelle et valider les données soumises.
        $form->handleRequest($request);
        // Si le formulaire est soumis &&  si le formulaire est valide, nous pouvons accéder aux données du formulaire à l'aide de la méthode getData().
        if($form ->isSubmitted() && $form ->isValid()){
          
            $message= new Contact();

            // traitement formulaire:
            $data=$form->getData() ;
            $message =$data;
            $entityManager->persist($message);
            $entityManager->flush();

            // redirection vers acceuil
            return $this->redirectToRoute('app_acceuil');
        }
        return $this->render('contact/index.html.twig', [
            'form' => $form,
        ]);
    }

    public function delete (Request $request): Response {
        $submittedToken =$request->request->get('token');
        if($this->isCsrfTokenValid('delete-item', $submittedToken)){ 
            return  $this->redirecttoRoute('app_acceuil');
        } ;
    }
}