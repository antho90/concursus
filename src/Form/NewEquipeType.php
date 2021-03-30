<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Form\NewUserType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class NewEquipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class ,[
                'constraints' => [
                    new NotBlank([
                        'message' => 'Merci de saisir un nom'
                    ])
                    ],
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control'
                    ]
            ])
            ->add('structure', TextType::class ,[
                'constraints' => [
                    new NotBlank([
                        'message' => 'Merci de saisir une structure'
                    ])
                    ],
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control'
                    ]
            ])
            ->add('ville', TextType::class ,[
                'constraints' => [
                    new NotBlank([
                        'message' => 'Merci de saisir une ville'
                    ])
                    ],
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control'
                    ]
            ])
            ->add('validation', CheckboxType::class, [
                'label'    => 'En cochant cette case je confirme que les enfants sont sous ma responsabilités',
                'required' => true,
            ])

            ->add('validationImage', CheckboxType::class, [
                'label'    => 'En cochant cette case je m\'engage à faire signer une charte de droit à l\'image à tous les membres de mon équipe ',
                'required' => true,
            ])

            // ->add('generaluser', CollectionType::class, [
            //     'entry_type' => NewUserType::class,
            //     'entry_options' => ['label' => false],
            //     'allow_add' => true,
            // ])
            ->add('Valider', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Equipe::class,
        ]);
    }
}
