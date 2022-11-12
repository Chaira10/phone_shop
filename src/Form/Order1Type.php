<?php

namespace App\Form;

use App\Entity\Order;
use App\Entity\OrderDetails;
use Symfony\Component\Form\AbstractType;;
use Doctrine\DBAL\Types\DateTimeImmutableType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use App\Entity\Statut;

class Order1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('id')
            
            ->add('carrierName',TextType::class, ['label' => 'Transporteur', 'attr' => [ 'readonly' => 'readonly'] ])
            ->add('carrierPrice', MoneyType::class, ['label'=> 'Prix :', 'required' => false, 'attr' => [  'readonly' => 'readonly']])
            ->add('total', MoneyType::class, ['label'=> 'Total :', 'required' => false, 'attr' => [ 'readonly' => 'readonly']])
            ->add('isPaid', CheckboxType::class, ['label'=> 'Payée :', 'required' => false,'row_attr' => ['class' => 'form-switch'], 'attr' => [  'readonly' => 'readonly']])
            // ->add('user', TextType::class, ['label' => 'Sous titre'])
            // ->add('orderDetails', EntityType::class, ['class' => OrderDetails::class,'label'=> 'Details :'])
            ->add('statut', EntityType::class, ['class' => Statut::class,'label'=> 'Statut :'])
            // ->add('statut',ChoiceType::class, ['choices' => [ 'En preparation' => 1, 'Expediee' => 2, 'Annulee' => 3], 'choices_attr' => ['En preparation' =>['data_statut' => 'En preparation'],'Expediee' =>['data_statut' => 'Expediee'],'Annulee' =>['data_statut' => 'Annulee']],'multiple'=>true, 'mapped' => false, 'attr' => ['class' => 'select2']])
            // ->remove('delivery', TextType::class, ['label' => 'livraison'])
            ->remove('createdAt', DateTimeImmutableType::class)
        ;
    }



    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
