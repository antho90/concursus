<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Competiton;
use App\Entity\GeneralUser;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use App\Repository\GeneralUserRepository;
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
    private $generalUserRepository;
    public function __construct(GeneralUserRepository $generalUserRepository )
    {
        $this->generalUserRepository = $generalUserRepository;
        
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('equipe', EntityType::class, [
                'class' => GeneralUser::class,
                'choice_label' =>function(GeneralUser $generalUser){
                    return sprintf('(%d) %s', $generalUser->getId());
                },
                'choices' => $this->generalUserRepository->findByMentor(),
            ])

            // ->add('equipe')
                
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
