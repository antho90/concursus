<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Competiton;
use App\Entity\GeneralUser;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\ChoiceList\ChoiceList;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class InscriptionEquipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ->add('equipe', EntityType::class, [
            //     'class' => GeneralUser::class,
            //     'query_builder' => function (EntityManager $er) {
            //         return $er->createQueryBuilder('equipe')
            //             ->orderBy('equipe.id', 'ASC');
            //     },
            //     'choice_label' => 'equipe',
            // ])
            ->add('equipe')
                
            ->add('Valider', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Competiton::class,
        ]);
    }
}
