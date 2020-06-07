<?php

namespace App\Form;

use App\Entity\Achat;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AchatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codefacture')
            ->add('datefacture')
            ->add('article',EntityType::class, array(
                'class'=>'App\Entity\Article',
                'choice_label'=>'designation',
                'expanded'=>false,
                'multiple'=>false
            ))
            ->add('qte')

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Achat::class,
        ]);
    }
}
