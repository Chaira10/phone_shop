<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, ['label'=>'Email  :', 'required' => true])
            ->add('roles', ChoiceType::class, ['label'=>'Role  :', 'choices' => ['utilisateur' => 'USER', 'administrateur'=>'ADMIN'], 'required' => true, 'mapped'=>false])
            ->add('password', PasswordType::class, ['label'=>'Password :', 'required' => false,'mapped'=>false])
            ->add('firstname', TextType::class, ['label'=>'firstname  :', 'required' => true])
            ->add('lastname', TextType::class, ['label'=>'lastname  :', 'required' => true])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
