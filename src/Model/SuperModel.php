<?php

declare(strict_types=1);

namespace App\Model;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Using public properties for simplicity
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class SuperModel
{
    /**
     * @var string
     * @Assert\NotNull()
     * @Assert\NotBlank()
     */
    public $username;

    /**
     * @var string
     * @Assert\Email()
     *
     */
    public $email;
}