<?php

namespace App\Form;

use App\Entity\Phones;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PhoneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('phone', TextType::class, [
                'attr' => [
                    'placeholder' => 'Introduce tu número de móvil aquí * ',
                ],
                'label' => false,
                'required' => true,
            ])
            ->add('submit', SubmitType::Class, [
                'label' => 'Aceptar',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Phones::class,
        ]);
    }
}
