<?php

namespace App\Form;

use Symfony\Component\Validator\Constraints as Assert;

class mail
{
    /*
     * @Assert\NotBlank
     */
    public ?string $name = "";
    /*
     * @Assert\NotBlank
     */
    public ?string $contact = "";
    /*
     * @Assert\NotBlank
     */
    public ?string $body = "";
}