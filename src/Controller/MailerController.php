 <?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
// use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;

class MailerController extends AbstractController{
    #[Route('/email')]
    public function sendEmail(MailerInterface $mailer): Response
    {
        $email= (new TemplatedEmail())
        ->from('dsn@gmail.com')
        ->to( new Address('prospect@gmail.com'))
        //->cc('cc@example.com')
        //->bcc('bcc@example.com')
        //->replyTo('fabien@example.com')
        //->priority(Email::PRIORITY_HIGH)
        ->subject('Time for symfony Mailer!')
        ->htmlTemplate('emails/signup.html.twig')
        ->context([
            'expiration_date'=> new \DateTime('+7 days'),
            'username'=>'foo',
        ]);

        $mailer->send($email);
    }
} 
