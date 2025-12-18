<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Home extends Component
{
    #[Title(' Net Zero Carbon Solutions')]
    public function render()
    {
        return view('livewire.home');
    }
}
