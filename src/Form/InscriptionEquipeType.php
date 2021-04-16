<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Competiton;
use App\Entity\GeneralUser;
use App\Repository\EquipeRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use App\Repository\GeneralUserRepository;
use Doctrine\Common\Collections\Expr\Value;
use Doctrine\ORM\Query\Expr;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\ChoiceList\ChoiceList;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class InscriptionEquipeType extends AbstractType
{   
    public $equipeRepository;

    public function __construct(EquipeRepository $equipeRepository)
    {
        $this->equipeRepository = $equipeRepository;        
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('equipe', EntityType::class, [
                'class' => Equipe::class,
                'choice_label' => 'nom',
                // 'query_builder' => function (EntityRepository $repo, AbstractController $abstractController) {
                //     return $repo->createQueryBuilder('e')
                //     ->innerJoin('e.generaluser', 'g')
                //     ->where('g.id = :general_user_id')
                //     ->setParameter('general_user_id', $abstractController->getUser())
                //         ;
                // },
                'label' => 'Mes compétitions',
                'multiple' => true

            ])
            // , [
            //     'class' => GeneralUser::class,
            //     'choice_label' =>function(GeneralUser $generalUser){
            //         return sprintf('(%d) %s', $generalUser->getId());
            //     },
            //     'choices' => $this->generalUserRepository->findByMentor(),
            // ])

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
