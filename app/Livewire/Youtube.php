<?php

namespace App\Livewire;

use Livewire\Component;

class Youtube extends Component
{
    public $link;

    public function mount($link)
    {
        $this->link = $link;
    }

    public function render()
    {
        return view('livewire.youtube');
    }
}
