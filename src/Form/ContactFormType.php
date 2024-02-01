<?php

namespace App\Form;

use App\templates\emails\contact_email;
use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $form, array $options): void
    {
        $form
            ->add('utilisateur')
            ->add('mail')
            ->add('sujet')
            ->add('message',TextareaType::class, [
                'label'=>'Votre message',     
                // Ajout label et champ optionnel grâce à "required" = false:
                'required'=>false
            ])
            ->add('envoyer', SubmitType::class,[
                'label'=>'Envoyer '
            ])
        ;
      
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            
            // option par défault pour le formulaire:
            'data_class' => Contact::class,
        ]);
    }
}
