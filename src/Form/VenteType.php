<?php

namespace App\Form;

use App\Entity\Vente;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VenteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('montantFact')
            ->add('qte')
            ->add('article',EntityType::class, array(
                'class'=>'App\Entity\Article',
                'choice_label'=>'designation',
                'expanded'=>false,
                'multiple'=>false
            ))        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Vente::class,
        ]);
    }
}
