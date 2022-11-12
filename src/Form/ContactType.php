<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom', TextType::class,[ 'label' => 'Prenom', 'attr' => ['placeholder' => 'Merci de saisir votre Prénom']])
            ->add('nom', TextType::class,[ 'label' => 'Nom', 'attr' => ['placeholder' => 'Merci de saisir votre Nom']])
            ->add('email', EmailType::class,[ 'label' => 'Email', 'attr' => ['placeholder' => 'Merci de saisir votre email']])
            ->add('subject', TextType::class,[ 'label' => 'Objet', 'attr' => ['placeholder' => 'Merci de saisir l\'objet du message']])
            ->add('content', TextareaType::class,[ 'label' => 'Message', 'attr' => ['placeholder' => 'Merci de saisir votre message']])
            ->add('submit', SubmitType::class,[ 'label' => 'Envoyer', 'attr' => ['class' => 'btn-block btn-success']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
