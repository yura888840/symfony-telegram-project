<?php

namespace App\Form;

use App\Entity\FlatAdvertisement;
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
            ->add('land',TextType::class, ['label' => 'Title'])
            ->add('city',TextareaType::class, ['label' => 'Content'])
            ->add('address',TextType::class, ['label' => 'Address'])
            ->add('owner_number',TextType::class, ['label' => 'Owner Number'])
            ->add('additional_info',TextType::class, ['label' => 'Country'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FlatAdvertisement::class,
        ]);
    }
}
