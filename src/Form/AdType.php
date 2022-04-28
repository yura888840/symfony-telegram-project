<?php

namespace App\Form;

use App\Entity\Ad;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',TextType::class, ['label' => 'Title'])
            ->add('text',TextareaType::class, ['label' => 'Content'])
            ->add('address',TextType::class, ['label' => 'Address'])
            ->add('owner_number',TextType::class, ['label' => 'Owner Number'])
            ->add('county',TextType::class, ['label' => 'Country'])
            ->add('city',TextType::class, ['label' => 'City'])
            ->add('status',TextType::class, ['label' => 'Status'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ad::class,
        ]);
    }
}
