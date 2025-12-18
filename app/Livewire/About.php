<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class About extends Component
{
    #[Title('About Ajay Mehra - Swachh SeVa Foundation')]
    public function render()
    {
        return view('livewire.about');
    }
}
