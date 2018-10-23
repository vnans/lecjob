<?php

namespace App\Form;

use App\Entity\CjOffres;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CjOffresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type')
            ->add('libelle')
            ->add('metier')
            ->add('niveau')
            ->add('experience')
            ->add('lieu')
            ->add('description',TextareaType::class)
            ->add('recruteur')
            ->add('tel')
            ->add('email')
            ->add('dossier')        
            ->add('dateFin')
             ->add('image',FileType::class, array('label' => 'Choisir une image','data_class'=>null))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CjOffres::class,
        ]);
    }
}
