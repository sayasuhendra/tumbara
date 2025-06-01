<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form
{
    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $email = '';

    #[Validate('required')]
    public $handphone = '';

    public $city = '';

    #[Validate('required')]
    public $message = '';

    public function save()
    {
        $this->validate();

        Post::create(
            $this->only(['title', 'content'])
        );

        return $this->redirect('/posts');
    }
}
