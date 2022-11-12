<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',TextType::class, ['label' => 'Nom'])
            ->add('slug',TextType::class, ['label' => 'slug'])
            ->add('imageFile', FileType::class, ['label'=> 'image File :', 'required' => false])
            ->add('subtitle',TextType::class, ['label' => 'Sous titre'])
            ->add('description', CKEditorType::class, ['label'=> 'Description :', 'required' => false])
            ->add('price', MoneyType::class, ['label'=> 'Prix :', 'required' => false])
            ->add('category', EntityType::class, ['class' => Category::class,'label'=> 'Catégorie :'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
