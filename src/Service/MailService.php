<?php

namespace App\Service;

use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class MailService
{   private $mailer;
    private $paramBag;
    public function __construct(ParameterBagInterface $paramBag , MailerInterface $mailer){
        $this->paramBag = $paramBag ;
        $this->mailer=$mailer;
    }
    public function sendMail($expediteur , $destinataire, $sujet, $message, $data){
        // $dossier_images=$this->paramBag->get('images');
        $email= (new TemplatedEmail())
        ->from($expediteur)
        ->to( new Address($destinataire))
        ->subject($sujet)
        ->htmlTemplate('emails/signup.html.twig')
        // ->addPart(new DataPart(new File($dossier_images.'/buffalo.jpg'), 'buffalo'))
        ->context([
            'data'=> $data,
            'message'=>$message,
    ]);
    $this->mailer->send($email);
    }
}