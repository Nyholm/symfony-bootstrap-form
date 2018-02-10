<?php

declare(strict_types=1);

namespace App\Model;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Using public properties for simplicity.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class SuperModel
{
    /**
     * @var PersonalInformation
     * @Assert\Valid()
     */
    public $personalInformation;

    /**
     * @var string
     * @Assert\NotNull()
     * @Assert\NotBlank()
     */
    public $username;

    /**
     * @var string
     * @Assert\Email()
     */
    public $email;

    /**
     * PasswordType
     * @var int
     */
    public $password;

    /**
     * SearchType
     * @var string
     * @Assert\NotBlank()
     */
    public $searchInput;

    /**
     * UrlType
     * @var string
     * @Assert\NotBlank()
     */
    public $homepage;

    /**
     * RangeType
     * @var int in any unit
     * @Assert\NotBlank()
     * @Assert\Range(min=20, max=160)
     */
    public $weight;

    /**
     * TelType
     * @var string
     * @Assert\NotBlank()
     */
    public $phone;

    /**
     * ColorType
     * @var string
     * @Assert\NotBlank()
     */
    public $color;

    /**
     * ChoiceType (checkbox)
     * @var string
     * @Assert\NotBlank()
     */
    public $sportsTeam;

    /**
     * ChoiceType (radio)
     * @var string
     * @Assert\NotBlank()
     */
    public $carManufacture;

    /**
     * ChoiceType (single select)
     * @var string
     * @Assert\NotBlank()
     */
    public $animal;

    /**
     * ChoiceType (multi select)
     * @var string
     * @Assert\NotBlank()
     */
    public $foodType;

    /**
     * CountryType
     * @var string
     * @Assert\NotBlank()
     */
    public $country;

    /**
     * LanguageType
     * @var string
     * @Assert\NotBlank()
     */
    public $language;

    /**
     * LocaleType
     * @var string
     * @Assert\NotBlank()
     */
    public $locale;

    /**
     * TimeZoneType
     * @var string
     * @Assert\NotBlank()
     */
    public $timezone;

    /**
     * CurrencyType
     * @var string
     * @Assert\NotBlank()
     */
    public $currency;

    /**
     * BirthdayType
     * @var string
     * @Assert\Date()
     */
    public $birthday;

    /**
     * DateType
     * @var string
     * @Assert\Date()
     */
    public $nextSymfonyCon;

    /**
     * DateIntervalType
     * @var string
     */
    public $holiday;

    /**
     * DateTimeType
     * @var string
     */
    public $nextMeeting;

    /**
     * TimeType
     * @var string
     */
    public $wakeupTime;

    /**
     * CheckboxType
     * @var bool
     * @Assert\IsTrue()
     */
    public $agreeLicense;

    /**
     * RadioType
     * @var bool
     * @Assert\IsTrue()
     */
    public $agreePrivacy;

    /**
     * FileType
     * @var
     */
    public $picture;

    /**
     *
     */
    public function __construct()
    {
        $this->personalInformation = new PersonalInformation();
    }

    // TODO add CollectionType
    // TODO add HiddenType
    // TODO add RepeatedType
    // TODO add EntityType


}
