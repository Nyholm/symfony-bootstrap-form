<?php

declare(strict_types=1);

namespace App\Form;

use App\Model\PersonalInformation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonalInformationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('money', MoneyType::class);
        $builder->add('description', TextareaType::class);
        $builder->add('nbApples', IntegerType::class);
        $builder->add('tax', PercentType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', PersonalInformation::class);
    }
}
