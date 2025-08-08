<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class Small extends Component
{
    #[Reactive]
    public $count;
    public function render()
    {
        return view('livewire.small');
    }
}
