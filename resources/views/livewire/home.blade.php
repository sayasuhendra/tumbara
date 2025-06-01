<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Session, Title};

new
#[Title('Home')]

class extends Component {

    // #[Session(key: 'locale')]
    // public $locale = session('locale') ?? 'id';
    //
}; ?>

<div>
@include('livewire.rumah')

    <style>
        .text-border-gray {
            -webkit-text-fill-color: transparent;
            -webkit-text-stroke-width: 2px;
            -webkit-text-stroke-color: #7780a1;
        }

        .text-border-white {
            -webkit-text-fill-color: transparent;
            -webkit-text-stroke-width: 2px;
            -webkit-text-stroke-color: #ffffff;
        }

    </style>

</div>
