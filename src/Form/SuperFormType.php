<?php

declare(strict_types=1);

namespace App\Form;

use App\Model\SuperModel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\Extension\Core\Type\DateIntervalType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use Symfony\Component\Form\Extension\Core\Type\LocaleType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\TimezoneType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Currency;

class SuperFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', TextType::class);
        $builder->add('email', EmailType::class);
        $builder->add('password', PasswordType::class);
        $builder->add('personalInformation', PersonalInformationFormType::class);
        $builder->add('searchInput', SearchType::class);
        $builder->add('homepage', UrlType::class);
        $builder->add('weight', RangeType::class);
        $builder->add('phone', TelType::class);
        $builder->add('color', ColorType::class);

        $builder->add('sportsTeam', ChoiceType::class, [
            'multiple' => true,
            'expanded' => true,
            'choices' => ['Manchester U' => 'man u', 'Read madrid' => 'real', 'Hammarby' => 'bajen'],
        ]);
        $builder->add('carManufacture', ChoiceType::class, [
            'multiple' => false,
            'expanded' => true,
            'choices' => ['Volvo' => 'volvo', 'Saab' => 'saab', 'Koenigsegg' => 'koenigsegg']
        ]);
        $builder->add('animal', ChoiceType::class, [
            'multiple' => false,
            'expanded' => false,
            'choices' => ['Dog' => 'dog', 'Cat' => 'cat', 'Parrot' => 'parrot']
        ]);
        $builder->add('foodType', ChoiceType::class, [
            'multiple' => true,
            'expanded' => false,
            'choices' => ['Italian' => 'it', 'American' => 'am', 'Swedish' => 'sv', 'German' => 'de'],

        ]);
        $builder->add('country', CountryType::class);
        $builder->add('language', LanguageType::class);
        $builder->add('locale', LocaleType::class);
        $builder->add('timezone', TimezoneType::class);
        $builder->add('currency', CurrencyType::class);

        $builder->add('birthday', BirthdayType::class);
        $builder->add('nextSymfonyCon', DateType::class);
        $builder->add('holiday', DateIntervalType::class);
        $builder->add('nextMeeting', DateTimeType::class);
        $builder->add('wakeupTime', TimeType::class);
        $builder->add('agreeLicense', CheckboxType::class);
        $builder->add('agreePrivacy', RadioType::class);
        $builder->add('picture', FileType::class);

        $builder->add('submit', SubmitType::class);
        $builder->add('button', ButtonType::class);
        $builder->add('reset', ResetType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', SuperModel::class);
    }
}
