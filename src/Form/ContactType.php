<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'placeholder' => 'Tu nombre*',
                ],
                'label' => false,
                'required' => true
            ])
            ->add('surname', TextType::class, [
                'attr' => [
                    'placeholder' => 'Tus apellidos*',
                ],
                'label' => false,
                'required' => true
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'placeholder' => 'Tu email*',
                ],
                'label' => false,
                'required' => true
            ])
            ->add('policy_1', CheckboxType::class, [
                'label' => 'Acepto las Bases de la Promoción y Política de Privacidad y Cookies*',
                'required' => true
            ])
            ->add('policy_2', CheckboxType::class, [
                'label' => 'Acepto que Vodafone trate mis datos de facturación, tráfico y navegación para enviarme comunicaciones comerciales personalizadas basadas en esta información.'
            ])
            ->add('policy_3', CheckboxType::class, [
                'label' => 'Acepto que Vodafone me remita comunicaciones comerciales* con ofertas que pudiera ser de mi interés procedentes de terceras empresas con als que Vodafones haya llegado a un acuerdo comercial.',
                'required' => true
            ])
            ->add('submit', SubmitType::Class, [
                'label' => 'Aceptar',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
