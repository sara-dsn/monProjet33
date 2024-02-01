<?php
    namespace App\Controller;

use App\Service\MailService;
use App\Entity\Contact;
use App\Form\ContactFormType;
use Symfony\Component\Mime\Address;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, MailService $MailService): Response
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
$destinataire='sara@gmail.com';
$expediteur=$form->get('mail')->getData();
$sujet=$form->get('sujet')->getData();
$message=$form->get('message')->getData();


              
    $email=$MailService->sendMail($expediteur,$destinataire,$sujet,$message,$data);

            // redirection vers acceuil
            return $this->redirectToRoute('app_accueil');
       
           
        }
        return $this->render('emails/contact_email.html.twig',[
            'form' => $form->createView(),
        ]);
    }

    public function delete (Request $request): Response {
        $submittedToken =$request->request->get('token');
        if($this->isCsrfTokenValid('delete-item', $submittedToken)){ 
            return  $this->redirecttoRoute('app_accueil');
        } ;
    }
}