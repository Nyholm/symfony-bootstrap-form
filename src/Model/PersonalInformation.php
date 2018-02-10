<?php

declare(strict_types=1);

namespace App\Model;
use Symfony\Component\Validator\Constraints as Assert;

class PersonalInformation
{

    /**
     * TestAreaType
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(min=14)
     */
    public $description;

    /**
     * IntegerType
     * @var int
     * @Assert\NotBlank()
     * @Assert\Range(min=44)
     */
    public $nbApples;

    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $money;

    /**
     * PercentType
     * @var float
     */
    public $tax;

}