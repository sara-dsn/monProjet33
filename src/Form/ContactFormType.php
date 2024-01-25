<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('objet')
            ->add('email')
            // Ajout label et champ optionnel grâce à "required" = false:
            ->add('message',TextareaType::class, [
                'label'=>'Votre message',
                'required'=>false
            ])
            ->add('save', SubmitType::class,[
                'label'=>'Envoyer le messsage'
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
