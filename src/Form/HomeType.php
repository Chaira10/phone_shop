<?php

namespace App\Form;

use App\Entity\Home;
use App\Entity\Carousel;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class HomeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('isActive', CheckboxType::class, ['label' => 'is active :', 'required' => false])
            ->add('title',TextType::class, ['label' => 'title'])
            ->add('text', CKEditorType::class, ['label'=> 'Text :', 'required' => false])
            ->add('carousel', EntityType::class, ['class'=> Carousel::class, 'label'=> 'Carousels','multiple'=> true, 'attr' =>['class' => 'select2']])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Home::class,
        ]);
    }
}
