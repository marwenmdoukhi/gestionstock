<?php

namespace App\Form;

use App\Entity\Client;
use App\Entity\ReferenceEntre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReferenceEntreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reference')
            ->add('clients',EntityType::class,[
                'class'=>"App\Entity\Client",
                'choice_label' => function(Client $client) {
                    return $client->getNom() . ' ' . $client->getPrenom();
                }
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ReferenceEntre::class,
        ]);
    }
}
