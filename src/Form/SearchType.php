<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('alternation', ChoiceType::class, [
                'choices'  => [
                    'En apprentissage' => 'apprentissage',
                    'En alternance' => 'alternation',
                    'En initiale' => 'initial'
                    ]
                ])
            ->add('backToSchool', ChoiceType::class, [
                'choices'  => [
                    'Septembre' => 'september',
                    'Janvier' => 'january'
                    ]
                ])
            ->add('level', ChoiceType::class, [
                'choices'  => [
                    'BTS' => 'bts',
                    'DUT' => 'dut',
                    'Bachelor' => 'bachelor',
                    'Master 1' => 'master1',
                    'Master 2' => 'master2'
                    ]
                ])
            ->add('rncp', ChoiceType::class, [
                'choices'  => [
                    'RNCP niveau V' => '5',
                    'RNCP niveau IV' => '4',
                    'RNCP niveau III' => '3',
                    'RNCP niveau II' => '2',
                    'RNCP niveau I' => '1'
                    ]
                ])
            ->add('formation', ChoiceType::class, [
                'label' => 'Formations souhaitées',
                'choices'  => [
                    'Bachelor WEB' => 'web_bachelor',
                    'Master 1 360 Digital' => '360_digital_master1',
                    'Master 2 360 Digital' => '360_digital_master2'
                ]
                ])
            ->add('location', ChoiceType::class, [
                'label' => 'Regions/Villes souhaitées',
                'choices'  => [
                    'Nice' => 'nice',
                    'Paris' => 'paris',
                    'Lille' => 'lille'
                ]
                ])
            ->add('noFormation', ChoiceType::class, [
                'label' => 'Formations non souhaitées',
                'choices'  => [
                    'Bachelor WEB' => 'web_bachelor',
                    'Master 1 360 Digital' => '360_digital_master1',
                    'Master 2 360 Digital' => '360_digital_master2'
                ]
                ])
            ->add('noLocation', ChoiceType::class, [
                'label' => 'Regions/Villes non souhaitées',
                'choices'  => [
                    'Nice' => 'nice',
                    'Paris' => 'paris',
                    'Lille' => 'lille'
                ]
                ])
                
            ->add('searchType', ChoiceType::class, [
                'label' => 'Préférence de tri',
                'choices'  => [
                    'Pertinence' => 'pertinence',
                    'A -> Z' => 'az',
                    'Z -> A' => 'za',
                ]
                ])
            ->add('search', SubmitType::class, [
                'label' => 'Rechercher',
                'attr' => [
                    'class' => 'btn waves-effect waves-light white validationForm'
                    ]
                ])

        ;
    }
}