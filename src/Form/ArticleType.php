<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designation')
            ->add('qtePP')
            ->add('prixAchat')
            ->add('prixVente')
            ->add('qteMax')
            ->add('gteMin')
            ->add('famille',EntityType::class,[
                'class'=>'App\Entity\Famille',
                'choice_label'=>'nomFamille'
            ])
            ->add('magazins',EntityType::class,[
                'class'=>'App\Entity\Magazin',
                'choice_label'=>'nom',
                'multiple'=>false
            ])
           //->add('stock')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
