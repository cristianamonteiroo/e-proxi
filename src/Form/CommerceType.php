<?php

namespace App\Form;

use App\Entity\Commerce;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommerceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('commercants')
            ->add('email')
            ->add('telephoe')
            ->add('siren')
            ->add('iban')
            ->add('site')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Commerce::class,
        ]);
    }
}
