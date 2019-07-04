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
                    'placeholder' => 'Tu nombre *',
                ],
                'label' => false,
                'required' => true
            ])
            ->add('surname', TextType::class, [
                'attr' => [
                    'placeholder' => 'Tu nombre *',
                ],
                'label' => false,
                'required' => true
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'placeholder' => 'Tu nombre *',
                ],
                'label' => false,
                'required' => true
            ])
            ->add('policy_1', CheckboxType::class, [
                'label' => 'Política de privacidad numero 1',
                'required' => true
            ])
            ->add('policy_2', CheckboxType::class, [
                'label' => 'Política de privacidad numero 2'
            ])
            ->add('policy_3', CheckboxType::class, [
                'label' => 'Política de privacidad numero 3',
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
