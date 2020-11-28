<?php

namespace App\Form;

use App\Entity\Materiels;
use App\Entity\PvReception;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProcesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designation', EntityType::class,[
                'class'             =>      Materiels::class,
                    'choice_label'  => 'Description',
                    'multiple'      =>false
                ]
            )
            ->add('qteDemande')
            ->add('qteRecu')
            ->add('marque')
            ->add('observation')
            ->add('createdAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PvReception::class,
        ]);
    }
}
