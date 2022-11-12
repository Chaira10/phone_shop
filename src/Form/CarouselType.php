<?php

namespace App\Form;

use App\Entity\Home;
use App\Entity\Carousel;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CarouselType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageFile', FileType::class, ['label'=> 'Image :', 'required' => false])
            ->add('title',TextType::class, ['label' => 'Titre'])
            ->add('text', CKEditorType::class, ['label'=> 'Texte :', 'required' => false])
            ->add('homes', EntityType::class, ['class'=> Home::class, 'label'=> 'Homes','multiple'=> true, 'required' => false, 'attr' =>['class' => 'select2']])
            ->remove('updatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Carousel::class,
        ]);
    }
}
