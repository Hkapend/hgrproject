<?php

namespace App\Form;

use App\Entity\Fournisseur;
use App\Entity\Materiels;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MaterielsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description')
            ->add('type', ChoiceType::class, array(
                'choices'=>array(
                    'Consommable'=>'Consommable',
                    'Stockable'=>'Stockable'
                ),
            ))
            ->add('lieuStock')
            ->add('observation')
            ->add('activated',ChoiceType::class, array(
                'choices'=>array(
                    'Activer'=> 1,
                    'Desactiver'=> 0
                ),
            ))
            ->add('fournisseur', EntityType::class,[
                'class'         =>  Fournisseur::class,
                'choice_label'  => 'Description',
                'multiple'      =>  false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Materiels::class,
        ]);
    }
}
